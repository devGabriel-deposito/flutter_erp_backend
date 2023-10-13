<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastrosClientesCadastro extends FormRequest
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
            'nome'                 => 'required|max:255',
            'sexo'                 => 'required|max:255',
            'nascimento'           => 'required|date_format:Y-m-d',
            'estado_civil'         => 'required|max:255',
            'nacionalidade'        => 'required|max:255',
            'rg'                   => 'required|max:255',
            'cpf'                  => 'required|max:255',
            'cep'                  => 'required|max:255',
            'estado'               => 'required|max:255',
            'cidade'               => 'required|max:255',
            'rua'                  => 'required|max:255',
            'numero'               => 'required|max:255',
            'logradouro'           => 'required|max:255',
            'apto'                 => 'required|max:255',
            'bairro'               => 'required|max:255',
            'telefone'             => 'max:255',
            'celular'              => 'required|max:255',
            'email'                => 'required|max:255',
            'renda_mensal'         => 'required|numeric',
            'fonte_de_renda'       => 'required|max:255',
            'tipo_de_imovel'       => 'max:255',
            'localizacao_desejada' => 'max:255',
            'faixa_de_preco'       => 'required|numeric',
            'quartos'              => 'integer',
            'banheiros'            => 'integer',
            'piscina'              => 'boolean',
            'garagem'              => 'boolean',
            'jardim'               => 'boolean',
            'area_de_lazer'        => 'boolean',
            'copia_do_rg'          => 'required|max:255',
            'copia_do_cpf'         => 'required|max:255',
            'comprovante_de_renda' => 'required|max:255',
            'observacoes'          => 'max:255',
            'status'               => 'required|max:255',
            'ultima_interacao'     => 'required|date_format:Y-m-d'
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'O campo \':attribute\' é obrigatório',
            'max'      => 'O máximo de caracteres para o campo \':attribute\' é de 255 caracteres',
            'numeric'  => 'O campo \':attribute\' deve ser do tipo numérico',
            'integer'  => 'O campo \':attribute\' deve ser do tipo inteiro',
            'boolean'  => 'O campo \':attribute\' deve ser do tipo booleano',
        ];
    }
}
