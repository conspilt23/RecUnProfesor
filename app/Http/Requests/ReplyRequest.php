<?php

namespace App\Http\Requests;

use App\Rules\Comment;
use Illuminate\Foundation\Http\FormRequest;

class ReplyRequest extends FormRequest
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
            'opinion_id' => 'required|exists:App\Models\Opinion,id',
            'body' => ['required', 'min:16', 'max:4200', new Comment]
        ];
    }

    public function messages(){
        return [
            'opinion_id.required' => 'La opinión es requerida.',
            'opinion.exists' => 'Opinión no encontrada.',
            'body.required' => 'No puedes enviar una respuesta en blanco.',
            'body.min' => 'Tu respuesta debe tener una extensión mínima de :min palabras.',
            'body.max' => 'Tu respuesta es demasiado larga, acórtala por favor.',
        ];
    }
}
