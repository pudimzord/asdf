@extends('layouts.app')

@section('content')



<div class="container">
    <form method="POST" action="/cliente/{{$cliente->idCliente}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label>Nome cliente</label>
            <input type="text" name="nomeCliente" class="form-control" value="{{$cliente->nomeCliente}}">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="emailCliente" class="form-control" value="{{$cliente->emailCliente}}">
        </div>
        <div class="form-group">
            <label>Nome empresa</label>
            <input type="text" name="nomeEmpresaCliente" class="form-control" value="{{$cliente->nomeEmpresaCliente}}">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
</div>


@endsection
