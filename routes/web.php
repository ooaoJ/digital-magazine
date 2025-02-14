<?php

use Illuminate\Support\Facades\Route;
use Http\Controllers\AuthController;

// Rota da pagina index
Route::get('/', function () {return view('welcome');});
// Rota da pagina login
Route::get('/login', function() {return view('auth.index');})->name('login');
// Rota da pagina register
Route::get('/register', function(){return view('auth.register');})->name('register');
// Rota para cadastrar usuario
Route::post('/register', [AuthController::class, 'store'])->name('register-user');