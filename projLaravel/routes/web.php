<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/salvarcadastro', [HomeController::class,"salvar"]);

Route::get('/listagem', function () {
    return view('listagem');
});

Route::get('/sobre', function () {
    return view('sobre');
});
