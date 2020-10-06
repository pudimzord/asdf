@extends('layouts.app')

@section('content')

<div class="container">
    <form method="POST" action="novocliente">
        <div class="form-group">
            <label>Nome cliente</label>
            <input type="text" name="nomeCliente" class="form-control">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="emailCliente" class="form-control">
        </div>
        <div class="form-group">
            <label>Nome empresa</label>
            <input type="text" name="nomeEmpresaCliente" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        {{ csrf_field() }}
    </form>
</div>

@endsection
