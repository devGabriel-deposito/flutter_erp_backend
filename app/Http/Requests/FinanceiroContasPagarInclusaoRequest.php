<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinanceiroContasPagarInclusaoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'valor'      => 'required|max:255',
            'documento'  => 'max:255',
            'observacao' => 'max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'valor.required' => 'O campo \'valor\' é obrigatório',
            'valor.max'      => 'O máximo de caracteres para o campo \'valor\' é de 255 caracteres',
            'documento.max'  => 'O máximo de caracteres para o campo \'documento\' é de 255 caracteres',
            'observacao.max' => 'O máximo de caracteres para o campo \'observacao\' é de 255 caracteres',
        ];
    }
}
