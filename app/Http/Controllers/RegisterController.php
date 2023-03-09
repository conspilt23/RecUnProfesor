<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\Career;

class RegisterController extends Controller
{
    public function __construnc(){
        $this->middleware('guest');
    }

    public function create() {
        $careers = Career::all();
        return view('registro', compact('careers'));
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();



        User::create([
            'username' => $data['registration_username'],
            'email' => $data['registration_email'],
            'password' => $data['registration_password'],
            'career' => $data['career'],
            'ip_address' => $_SERVER['REMOTE_ADDR']

        ]);

        return redirect('/')->with('succes', 'succesfully registered!');
    }

}
