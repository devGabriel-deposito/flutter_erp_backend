<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginCreateUserRequest extends FormRequest
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
            'name'     => 'required|max:255',
            'email'    => 'required|max:255',
            'password' => 'required|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'     => 'O campo \'name\' é obrigatório',
            'email.required'    => 'O campo \'email\' é obrigatório',
            'password.required' => 'O campo \'password\' é obrigatório',
            'name.max'          => 'O máximo de caracteres para o campo \'name\' é de 255 caracteres',
            'email.max'         => 'O máximo de caracteres para o campo \'email\' é de 255 caracteres',
            'password.max'      => 'O máximo de caracteres para o campo \'password\' é de 255 caracteres',
        ];
    }
}
