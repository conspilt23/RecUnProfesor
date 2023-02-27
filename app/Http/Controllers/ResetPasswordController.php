<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ResetPasswordController extends Controller
{

  public function getPassword($token)
  {

    return view('reset', ['token' => $token]);
  }

  public function updatePassword(Request $request)
  {
    $url = url()->previous();
    $request->validate([
      'token' => 'required',
      'r_email' => 'required|email|exists:users,email',
      'r_password' => 'required|min:8|confirmed',
      'r_password_confirmation' => 'required',

    ], [
      'r_email.required' => 'El correo es necesario.',
      'r_email.exists' => 'Correo inválido.',
      'r_password.required' => 'Debes colocar tu nueva contraseña.',
      'r_password.min' => 'Tu nueva contraseña debe tener al menos :min caracteres.',
      'r_password.confirmed' => 'Tus contraseñas deben coincidir.',
      'r_password_confirmation.required' => 'No puedes dejar este campo vacío.'
    ]);

    $updatePassword = DB::table('password_resets')
      ->where(['email' => $request->r_email, 'token' => $request->token])->first();

    if (!$updatePassword) {
      return redirect($url)->with('error_reset', 'Invalid token!');
    }

    $user = User::where('email', $request->r_email)
      ->update(['password' => Hash::make($request->r_password)]);



    DB::table('password_resets')->where(['email' => $request->r_email])->delete();

    return redirect('/')->with('reseted', 'Your password has been changed!');
  }
}
