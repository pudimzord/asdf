@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row">
        <div class="col">
            <h1>Informação do cliente</h1>
        </div>
        <div class="col">
            <h1>Equipamentos</h1>
        </div>
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
            <div class="mt-2">
                <a href="{{$infoCliente->idCliente}}/editarcliente" class="btn btn-primary">Editar</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminar">
                    Eliminar
                </button>
                <!-- Modal -->
                <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog"
                    aria-labelledby="modalEliminarLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalEliminarLabel">Apagar cliente</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Tem a certeza que pretende eliminar este cliente e todas as fichas relativas a este cliente?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <form action="/cliente/{{$infoCliente->idCliente}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    {{-- <input type="hidden" name="idCliente" value="{{$infoCliente->idCliente}}"> --}}
                                    <button type="submit" class="btn btn-primary">Apagar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col">

            <a href="{{$infoCliente->idCliente}}/novoequipamento" class="btn btn-primary btn-sm">Adicionar
                equipamento</a>



            @if (!$fichas->isEmpty())

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome equipamento</th>
                        <th scope="col">Nº de série</th>
                        <th scope="col">Validade</th>
                        <th scope="col">Notas</th>
                    </tr>
                </thead>


                <tbody>

                    @foreach ($fichas as $ficha)
                    <tr>
                        <td>{{$ficha->nomeEquipamento}}</td>
                        <td>{{$ficha->nSerie}}</td>
                        <td>{{$ficha->validade}}</td>
                        <td>{{$ficha->notas}}</td>

                    </tr>
                    @endforeach



                </tbody>

            </table>
            @else
            <p class="mt-5">Sem fichas</p>

            @endif

        </div>
    </div>



</div>

@endsection
