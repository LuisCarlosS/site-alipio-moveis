<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/', [HomeController::class, 'index'])->name("home");
Route::match(['get', 'post'], '/login-adm', [HomeController::class, 'indexAdm'])->name("login-adm");
Route::get('/login-cliente', [HomeController::class, 'loginCliente'])->name("login-cliente");
Route::match(['get', 'post'], '/esqueceu-senha', [HomeController::class, 'esqueceuSenha'])->name("esqueceu-senha");
Route::get('/cadastro-cliente', [HomeController::class, 'cadastroCliente'])->name("cadastro-cliente");
Route::get('/logout', [HomeController::class, 'logout'])->name("logout");

Route::middleware(['auth'])->prefix("admin")->name("admin.")->group(function(){

    Route::match(['get', 'post'],'/home', [AdminController::class, 'indexAdmin'])->name("home");

});