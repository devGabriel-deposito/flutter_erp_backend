<?php

namespace App\Http\Controllers\Financeiro\ContasPagar;

use App\Http\Controllers\Controller;
use App\Models\ContasPagar;
use Illuminate\Http\Request;

class IncluirController extends Controller
{
    public function incluir(Request $request, ContasPagar $contasPagar)
    {
        $id = $request->user()->id;

        $contasPagar->user_id      = $id;
        $contasPagar->valor        = $request->valor;
        $contasPagar->documento    = $request->documento;
        $contasPagar->observacao   = $request->observacao;

        $contasPagar->save();
    }
}
