<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginValidateRequst extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cpf' => 'required|min:11|max:11',
            'pass' => 'required|min:6'
        ];
    }


    public function messages()
    {
        return [

            'cpf.required'=>'CPF Obrigatório',
            'pass.required'=>'Senha Obrigatória',
            'pass.min'=>'Senha precisa ter no mínimo :min caracteres',
            'cpf.min'=>'O CPF precisa ter 11 caracteres',
            'cpf.max'=>'O CPF precisa ter 11 caracteres'
        ];

    }
}
