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
    Route::match(['get', 'post'], '/esqueceu-senha', [ClienteController::class, 'esqueceuSenha'])->name("esqueceu-senha");
    Route::get('/logout', [ClienteController::class, 'logout'])->name("logout");

    Route::middleware(['auth'])->group(function(){

        Route::match(['get', 'post'],'/home', [ClienteController::class, 'loginCliente'])->name("home");
    
    });

});

Route::match(['get', 'post'], '/', [HomeController::class, 'index'])->name("home");
Route::match(['get', 'post'], '/login', [HomeController::class, 'login'])->name("login");
Route::match(['get', 'post'], '/carregarLogin', [HomeController::class, 'carregarLogin'])->name("carregarLogin");
Route::get('/logout', [HomeController::class, 'logout'])->name("logout");

Route::prefix("produto")->name("produto.")->group(function(){

    Route::post('/salvar-tipo', [ProdutoController::class, 'salvarTipo_produto'])->name("salvar-tipo");
    Route::post('/salvar-produto', [ProdutoController::class, 'salvarProduto'])->name("salvar-produto");

});





