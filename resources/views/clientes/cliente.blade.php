@extends('layouts.app')

@section('content')

<div class="container">


<div class="row">
    <div class="col"><h1>Informação do cliente</h1></div>
    <div class="col"><h1>Equipamentos</h1></div>
</div>
<div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-lighter">Nome:</h6>
                    </div>
                    <div class="col">
                        <h5 class="card-title">{{$infoCliente->nomeCliente}}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-lighter">Empresa:</h6>
                    </div>
                    <div class="col">
                        <h5 class="card-title">{{$infoCliente->nomeEmpresaCliente}}</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-lighter">Email:</h6>
                    </div>
                    <div class="col">
                        <h5 class="card-title">{{$infoCliente->emailCliente}}</h6>
                    </div>
                </div>




            </div>
          </div>
    </div>
    <div class="col">

        <a href="{{$infoCliente->idCliente}}/novoequipamento" class="btn btn-primary btn-sm">Adicionar equipamento</a>
    </div>
</div>



</div>

@endsection
