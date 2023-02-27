<?php

namespace App\Http\Requests;

use App\Rules\Comment;
use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'teacher_id' => 'required',
            'body' => ['required', 'min:16', 'max:4200', new Comment],
            'quarter' => 'required|exists:App\Models\Quarter,period',
            'explaining_rate' => 'required|numeric|between:0,100',
            'class_again_rate' => 'required|numeric|between:0,100',
            'puntuality_rate' => 'required|numeric|between:0,100',
            'evaluation_rate' => 'required|numeric|between:0,100',
            'general_rate' => 'required|numeric|between:0,100',
        ];
    }

    public function messages() {
        return [
            'teacher_id.required' => 'Debes seleccionar al profesor que deseas calificar.',
            'body.min' => 'Tu comentario debe tener al menos :min caracteres.',
            'body.max' => 'Opinión exageradamente larga, el máximo es de :max caracteres',
            'body.required' => 'No puedes publicar una opinión en blanco.',
            'quarter.required' => 'Es necesario el período cuatrimestral.',
            'quarter.exists' => 'Período cuatrimestral inexistente.',
            'explaining_rate.required' => 'Debes elegir el rango',
            'explaining_rate.numeric' => 'Sólo se admiten valores numéricos',
            'explaining_rate.between' => 'El rango numérico es del 0 al 100',

            'puntuality_rate.required' => 'Debes elegir el rango',
            'puntuality_rate.numeric' => 'Sólo se admiten valores numéricos',
            'puntuality_rate.between' => 'El rango numérico es del 0 al 100',

            'evaluation_rate.required' => 'Debes elegir el rango',
            'evaluation_rate.numeric' => 'Sólo se admiten valores numéricos',
            'evaluation_rate.between' => 'El rango numérico es del 0 al 100',

            'general_rate.required' => 'Debes elegir el rango',
            'general_rate.numeric' => 'Sólo se admiten valores numéricos',
            'general_rate.between' => 'El rango numérico es del 0 al 100',
            
        ];
    }
}
