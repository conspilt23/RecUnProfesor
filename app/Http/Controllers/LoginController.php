<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{  
    public function login(LoginRequest $request){
        $url = url()->previous();
        $credentials = $request->getCredentials();
        $remember = $request->filled('remember');
        
        if(Auth::attempt($credentials, $remember)){
            $user = Auth::user();

            if($user->status === 'banned'){
                Auth::logout();
                Session::flush();
                request()->session()->invalidate();
                request()->session()->regenerateToken();
                return redirect()->back()->withInput()->with([
                    'banned_account' => 'Cuenta bloqueada por infringir las condiciones de uso de la web.'
                ]);
            }

            request()->session()->regenerate();
            return redirect($url)->with('Loginsuccesfully', 'you are logged in succesfuly');
        }

        return redirect()->to($url)->withInput()->with('Errorlogin', 'login failed');

    }
}
//https://www.youtube.com/watch?v=p7tGYsVQV48