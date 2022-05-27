<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FavoritoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix("admin")->name("admin.")->group(function(){

    Route::match(['get', 'post'],'/home', [AdminController::class, 'indexAdmin'])->name("home");

});

Route::prefix("cliente")->name("cliente.")->group(function(){

    Route::get('/cadastro-cliente', [ClienteController::class, 'cadastroCliente'])->name("cadastro-cliente");
    Route::post('/salvar-cliente', [ClienteController::class, 'salvarCliente'])->name("salvar-cliente");
    Route::get('/login-cliente', [ClienteController::class, 'loginCliente'])->name("login-cliente");
    Route::match(['get', 'post'], '/esqueceu-senha', [ClienteController::class, 'esqueceuSenha'])->name("esqueceu-senha");

});

Route::match(['get', 'post'], '/', [HomeController::class, 'index'])->name("home");
Route::match(['get', 'post'], '/login-adm', [HomeController::class, 'indexAdm'])->name("login-adm");
Route::get('/logout', [HomeController::class, 'logout'])->name("logout");





