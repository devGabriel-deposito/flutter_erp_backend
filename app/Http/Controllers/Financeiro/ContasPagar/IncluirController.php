<?php

namespace App\Http\Controllers\Financeiro\ContasPagar;

use App\Http\HttpCodes;
use App\Models\ContasPagar;
use App\Http\ResponseHandler;
use App\Http\Controllers\Controller;
use App\Http\Requests\FinanceiroContasPagarInclusaoRequest;

class IncluirController extends Controller
{
    public function incluir(FinanceiroContasPagarInclusaoRequest $request, ContasPagar $contasPagar)
    {
        $id = $request->user()->id;

        $contasPagar->user_id      = (int) $id;
        $contasPagar->valor        = (float) str_replace($request->valor, ',', '.');
        $contasPagar->documento    = (string) $request->documento;
        $contasPagar->observacao   = (string) $request->observacao;

        try {
            $contasPagar->save();

            return ResponseHandler::json([
                'message' => 'Usuário criado com sucesso'
            ], HttpCodes::$created);
        } catch (\Throwable $th) {
            return ResponseHandler::json($th, HttpCodes::$unprocessableContent);
        }
    }
}
