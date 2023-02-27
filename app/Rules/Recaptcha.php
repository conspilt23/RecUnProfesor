<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;
use Illuminate\Support\Str;

class Recaptcha implements InvokableRule
{
    public function __invoke($attribute, $value, $fail)
    {
        $siteKey = '6LdP7ZIkAAAAANKq9Lwf1h883Kz0pOwrX9D-MvcX';
        $secretKey = '6LdP7ZIkAAAAACfAC0dX8I2PBSCFp9XcknkUmxkp';

        $response = $value;

        $userIP = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";

        $response = \file_get_contents($url);
        $response = json_decode($response);

        if(!$response->success){
            return $fail('Recaptcha ha fallado');
        }

    }
}
