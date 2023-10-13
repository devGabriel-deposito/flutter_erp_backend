<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sexo',
        'nascimento',
        'estado_civil',
        'nacionalidade',
        'rg',
        'cpf',
        'cep',
        'estado',
        'cidade',
        'rua',
        'numero',
        'logradouro',
        'apto',
        'bairro',
        'telefone',
        'celular',
        'email',
        'renda_mensal',
        'fonte_de_renda',
        'tipo_de_imovel',
        'localizacao_desejada',
        'faixa_de_preco',
        'quartos',
        'banheiros',
        'piscina',
        'garagem',
        'jardim',
        'area_de_lazer',
        'copia_do_rg',
        'copia_do_cpf',
        'comprovante_de_renda',
        'observacoes',
        'status',
        'ultima_interacao',
    ];

    protected $casts = [
        'nome'                 => 'encrypted',
        'rg'                   => 'encrypted',
        'cpf'                  => 'encrypted',
        'cep'                  => 'encrypted',
        'estado'               => 'encrypted',
        'cidade'               => 'encrypted',
        'rua'                  => 'encrypted',
        'numero'               => 'encrypted',
        'logradouro'           => 'encrypted',
        'apto'                 => 'encrypted',
        'bairro'               => 'encrypted',
        'telefone'             => 'encrypted',
        'celular'              => 'encrypted',
        'email'                => 'encrypted',
        'localizacao_desejada' => 'encrypted',
        'observacoes'          => 'encrypted',
    ];
}
