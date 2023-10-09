<?php

namespace App\Http\Controllers\Financeiro\ContasPagar;

use App\Http\HttpCodes;
use App\Models\ContasPagar;
use App\Http\ResponseHandler;
use App\Http\Controllers\Controller;
use App\Http\Requests\FinanceiroContasPagarInclusaoRequest;
use Illuminate\Http\Request;

class IncluirController extends Controller
{
    public function incluir(Request $request, ContasPagar $contasPagar)
    {
        $id = $request->user()->id;

        $contasPagar->user_id      = (int) $id;
        $contasPagar->valor        = (float) str_replace(',', '.', $request->valor);
        $contasPagar->documento    = (string) $request->documento;
        $contasPagar->observacao   = (string) $request->observacao;

        try {
            $contasPagar->save();

            return ResponseHandler::json('Título criado com sucesso!', HttpCodes::$created);
        } catch (\Throwable $th) {
            return ResponseHandler::json($th, HttpCodes::$unprocessableContent);
        }
    }

    public function listar(ContasPagar $contasPagar)
    {
        return $contasPagar->all();
    }

    public function deletar($id, ContasPagar $contasPagar)
    {
        $contasPagar->where('id', $id)->delete();

        if ($contasPagar) {
            return ResponseHandler::json('Título excluído com sucesso!', HttpCodes::$ok);
        }

        return ResponseHandler::json('', HttpCodes::$unprocessableContent);
    }
}
