<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use App\Http\Requests\CadastrosClientesCadastro;
use Illuminate\Support\Facades\Crypt;

class ClientesController extends Controller
{
    public function incluir(CadastrosClientesCadastro $request, Clientes $clientes)
    {
        $clientes->nome                 = $request->nome;
        $clientes->sexo                 = $request->sexo;
        $clientes->nascimento           = $request->nascimento;
        $clientes->estado_civil         = $request->estado_civil;
        $clientes->nacionalidade        = $request->nacionalidade;
        $clientes->rg                   = $request->rg;
        $clientes->cpf                  = $request->cpf;
        $clientes->cep                  = $request->cep;
        $clientes->estado               = $request->estado;
        $clientes->cidade               = $request->cidade;
        $clientes->rua                  = $request->rua;
        $clientes->numero               = $request->numero;
        $clientes->logradouro           = $request->logradouro;
        $clientes->apto                 = $request->apto;
        $clientes->bairro               = $request->bairro;
        $clientes->telefone             = $request->telefone;
        $clientes->celular              = $request->celular;
        $clientes->email                = $request->email;
        $clientes->renda_mensal         = $request->renda_mensal;
        $clientes->fonte_de_renda       = $request->fonte_de_renda;
        $clientes->tipo_de_imovel       = $request->tipo_de_imovel;
        $clientes->localizacao_desejada = $request->localizacao_desejada;
        $clientes->faixa_de_preco       = $request->faixa_de_preco;
        $clientes->quartos              = $request->quartos;
        $clientes->banheiros            = $request->banheiros;
        $clientes->piscina              = $request->piscina;
        $clientes->garagem              = $request->garagem;
        $clientes->jardim               = $request->jardim;
        $clientes->area_de_lazer        = $request->area_de_lazer;
        $clientes->copia_do_rg          = $request->copia_do_rg;
        $clientes->copia_do_cpf         = $request->copia_do_cpf;
        $clientes->comprovante_de_renda = $request->comprovante_de_renda;
        $clientes->observacoes          = $request->observacoes;
        $clientes->status               = $request->status;
        $clientes->ultima_interacao     = $request->ultima_interacao;

        $clientes->save();
    }
}
