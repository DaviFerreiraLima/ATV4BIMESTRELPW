<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro as Cadastro;

class HomeController extends Controller
{
    public function salvar(Request $request){
        //dd($request);
        $cadastro = new Cadastro();
        $cadastro->nome = $request->nome;
        $cadastro->email = $request->email;
        $cadastro->funcao = $request->funcao;
        $cadastro->save();
        return back();
    }
}
