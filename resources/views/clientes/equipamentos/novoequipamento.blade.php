@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Novo equipamento</h1>
    <form method="POST" action="novoequipamento">
        <div class="form-group">
            <label>Tipo de Equipamento</label>
            <select class="form-control" name="nomeEquipamento" required>
                <option>Extintor</option>
                <option>Porta Corta Fogo</option>
                <option>Caixa de Incêndio</option>

              </select>
        </div>
        <div class="form-group">
            <label>Nº de série</label>
            <input type="number" name="nSerie" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Validade</label>
            <input type="date" name="validade" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Notas</label>
            <textarea type="textarea" name="notas" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        {{ csrf_field() }}
    </form>
</div>


@endsection
