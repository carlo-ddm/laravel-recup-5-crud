<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PizzaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:20',
            'prezzo' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo obbligatorio',
            'nome.min' => 'Minimo 3 caratteri',
            'nome.max' => 'Massimo 20 caratteri',
            'prezzo.required' => 'Campo obbligatorio',
            'prezzo.numeric' => 'Non hai inserito un numero'
        ];
    }
}
