@extends('layout')
@section('cabecalho')
    <p class="text-center">
        Projeto Laravel
    </p>
@endsection
@section('conteudo')

    <table style="margin-top:10px; width:100%; border:1px solid black;">
        <thead>
            <tr style="font-weight:900;">
                <td>Nome</td>
                <td>Email</td>
                <td>Função</td>
                <td>Ação</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($lista as $l)
                <tr>
                    <td> {{$l->nome}}</td>
                    <td> {{$l->email}}</td>
                    <td> {{$l->funcao}}</td>
                    <td> 
                        <a href="/excluir/{{$l->id}}">Excluir</a>
                        <a href="/alterar/{{$l->id}}">Alterar</a>
                    </td>
                </tr>               
            @endforeach
        </tbody>
    </table>   
@endsection
@section('rodape')
    <p class="text-center pt-2">
        Desenvolvido em sala
    </p>
@endsection
