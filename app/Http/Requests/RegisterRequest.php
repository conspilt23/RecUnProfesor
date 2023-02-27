<?php

namespace App\Http\Requests;

use App\Rules\Recaptcha;
use App\Rules\UserNames;
use Illuminate\Contracts\Validation\Rule as ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;


class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return  [
            'registration_username' => ['required', 'string', 'min:4', 'max:16', 'unique:users,username', 'alpha_dash', new UserNames],
            'registration_email' => 'required|email|unique:users,email',
            'registration_password' => 'required|min:8',
            'password_confirmation' => 'required|same:registration_password',
            'career' => ['required', 'exists:App\Models\Career,name'],
            'g-recaptcha-response' => ['required', new Recaptcha]
        ];
    }

    public function messages() {
        return [
            'registration_username.min' => 'Nombre muy corto, mínimo :min caracteres.',
            'registration_username.max' => 'Nombre muy largo, máximo :max caracteres.',
            'registration_username.required' => 'Debes colocar un nombre de usuario.',
            'registration_username.unique' => 'Este nombre de usuario ya fue tomado.',
            'registration_username.alpha_dash' => 'Has introducido carácteres no permitidos.',

            'registration_email.unique' => 'Este correo ya fue registrado.',
            'registration_email.required' => 'Se requiere un correo.',
            'registration_email.email' => 'Se requiere un correo real.',

            'registration_password.required' => 'No puedes tener una contraseña en blanco',
            'registration_password.min' => 'Tu contraseña debe tener al menos :min caracteres.',
            'password_confirmation.required' => 'Debes confirmar tu contraseña',
            'password_confirmation.same' => 'Las contraseñas deben coincidir',

            'career.required' => 'Tienes que seleccionar tu carrera.',
            'career.exists' => 'La carrera que pusiste no existe.',
            'g-recaptcha-response.required' => 'Por favor, completa el Recaptcha.'
        ];
    }
}
