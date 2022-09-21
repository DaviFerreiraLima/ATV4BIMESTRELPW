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
Route::get('/listagem', [HomeController::class,"lista"]);
Route::get('/excluir/{id}', [HomeController::class,"excluir"]);
Route::get('/alterar/{id}', [HomeController::class,"alterar"]);
Route::get('/alterar/{id}/confirmar', [HomeController::class,"confirmar"]);


Route::get('/sobre', function () {
    return view('sobre');
});
