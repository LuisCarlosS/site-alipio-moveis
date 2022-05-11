<?php

use App\Http\Controllers\HomeControler;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeControler::class, 'index'])->name("home");
Route::get('/login-cliente', [HomeControler::class, 'loginCliente'])->name("login-cliente");
Route::get('/login-adm', [HomeControler::class, 'loginAdm'])->name("login-adm");
Route::get('/esqueceu-senha', [HomeControler::class, 'esqueceuSenha'])->name("esqueceu-senha");
