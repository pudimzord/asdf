@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col">
            <a  href="/novocliente" class="btn btn-primary">Criar novo cliente</a>
        </div>

    </div>



</div>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1>Lista de clientes</h1>
            <table class="table table-striped">
                <thead>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Empresa</th>
                    <th scope="col"></th>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->nomeCliente}}</td>
                            <td>{{$cliente->emailCliente}}</td>
                            <td>{{$cliente->nomeEmpresaCliente}}</td>
                            <td><a href="#" class="btn btn-primary btn-sm">Ver</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
