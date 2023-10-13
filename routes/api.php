<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\Financeiro\ContasPagar\IncluirController;

Route::post('/login', [LoginController::class, 'login']); # /login
Route::post('/register', [LoginController::class, 'register']); # /register
Route::put('/redefine', [LoginController::class, 'redefine']); # /redefine

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('/financeiro')->group(function () {
        Route::prefix('/contas/pagar')->group(function () {
            Route::get('/{id}', [IncluirController::class, 'visualizar']); # /financeiro/contas/pagar
            Route::get('/', [IncluirController::class, 'listar']); # /financeiro/contas/pagar
            Route::post('/', [IncluirController::class, 'incluir']); # /financeiro/contas/pagar
            Route::delete('/{id}', [IncluirController::class, 'deletar']); # /financeiro/contas/pagar
        });
    });

    Route::prefix('/cadastros')->group(function () {
        Route::prefix('/clientes')->group(function () {
            Route::post('/', [ClientesController::class, 'incluir']); # /cadastros/clientes
        });
    });
});
