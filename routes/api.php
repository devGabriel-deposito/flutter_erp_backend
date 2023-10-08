<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Financeiro\ContasPagar\IncluirController;

Route::post('/login', [LoginController::class, 'login']); # /login
Route::post('/register', [LoginController::class, 'register']); # /register
Route::put('/redefine', [LoginController::class, 'redefine']); # /redefine

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('/financeiro')->group(function () {
        Route::prefix('/contas/pagar')->group(function () {
            Route::post('/', [IncluirController::class, 'incluir']); # /financeiro/contas/pagar
        });
    });
});
