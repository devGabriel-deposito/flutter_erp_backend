<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::post('/login', [LoginController::class, 'login']); # /login
Route::post('/register', [LoginController::class, 'register']); # /register
Route::put('/redefine', [LoginController::class, 'redefine']); # /redefine

Route::middleware('auth:sanctum')->group(function () {
});
