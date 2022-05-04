<?php

use App\Http\Controllers\HomeControler;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeControler::class, 'index'])->name("home");
