<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{

    public function postEmail(Request $request)
    {
        $rule = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email'
        ]);

        $url = url()->previous();
        if (!$rule->fails()) {
            $token = Str::random(64);

            $userPasswordReset = DB::table('password_resets')->whereEmail($request->email);

            if( $userPasswordReset->exists())
                $userPasswordReset->update(['token' => $token]);
            else
                DB::table('password_resets')->insert(['email' => $request->email, 'token' => $token]);
            

            Mail::send('verifyRecovery', ['token' => $token], 
            function ($message) use ($request) 
            {$message->to($request->email);
            $message->subject('Notificación de cambio de contraseña - Recomiéndame Un Profesor');});
            return redirect($url)->with('message', 'We have e-mailed your password reset link!');
        }

        return redirect($url)->with('errorSend', 'The current Email does not exit');
    }
}