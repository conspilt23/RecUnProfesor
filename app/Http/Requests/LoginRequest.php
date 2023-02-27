<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
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
        return [
            'username' => 'required|min:4',
            'password' => 'required|min:8'
        ];
    }

    public function messages() {
        return [
        'username.required' => 'Es necesario tu usuario o correo.',
        'password.required' => 'Debes introducir tu contraseña.',
        'username.min' => 'Tu usuario o correo debe tener al menos 4 caracteres.',
        'password.min' => 'Recuerda que tu contraseña es de al menos 8 caracteres.'
        ];
    }

    public function getCredentials(){
        $username = $this->get('username');

        if($this->isEmail($username)){
            return [
                'email' => $username,
                'password' => $this->get('password')
            ];
        }

        return $this->only('username', 'password');
    }

    public function isEmail($value){
        $factory = $this->container->make(ValidationFactory::class);

        return !$factory->make(['username' => $value], ['username' => 'email'])->fails();

    }
}
