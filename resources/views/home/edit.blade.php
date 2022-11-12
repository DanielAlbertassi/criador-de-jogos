@extends('layouts.app')
@section('title','Site')
@section('content')
    <div class="container mt-5">
        <h1>Editar jogo</h1>
        <hr>
        <form action="{{route('homes-update',['id'=>$home->id])}}"method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text"class="form-control"name="nome"value="{{$home->nome}}"placeholder="Digite um nome...">
                    </div>
                <br>
                    <div class="form-group">
                        <label for="categoria">Categoria:</label>
                        <input type="text"class="form-control"name="categoria"value="{{$home->categoria}}"placeholder="Digite a categoria do jogo...">
                    </div>
                <br>
                    <div class="form-group">
                        <label for="ano_criacao">Ano de crianção:</label>
                        <input type="number"class="form-control"name="ano_criacao"value="{{$home->ano_criacao}}"placeholder="Digite o ao de criação...">
                    </div>
                <br>
                    <div class="form-group">
                        <label for="valor">Valor:</label>
                        <input type="number"class="form-control"name="valor"value="{{$home->valor}}"placeholder="Digite o valor...">
                    </div>
                <br>
                    <div class="form-group">
                        <input type="submit"name="submit"class="btn btn-primary"value="Atualizar">
                        
                    </div>
            </div>
        </form>
    </div>
@endsection