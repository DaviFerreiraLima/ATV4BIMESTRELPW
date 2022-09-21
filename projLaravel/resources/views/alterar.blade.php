@extends('layout')
@section('cabecalho')
    <p class="text-center">
        Projeto Laravel
    </p>
@endsection
@section('conteudo')
    <div class="row">
        <div class="col">
            <form action="/alterar/{id}/confirmar" method="get">
                <input type="hidden" name="id" value="{{$item->id}}">
                <label for="" class="label-control" name="nome">
                    Nome
                </label>
                <input type="text" class="form-control" name="nome" value="{{$item->nome}}">
                <label for="" class="label-control">
                    Email
                </label>
                <input type="email" class="form-control" name="email" value="{{$item->email}}">
                <label for="" class="label-control" name="funcao">
                    Função
                </label>
                <input type="text" class="form-control" name="funcao" value="{{$item->funcao}}">
                <button class="btn btn-light">
                    Enviar
                </button>
            </form>
        </div>
    </div>
@endsection
@section('rodape')
    <p class="text-center pt-2">
        Desenvolvido em sala
    </p>
@endsection
