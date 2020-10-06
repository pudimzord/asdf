@extends('layouts.app')

@section('content')

<div class="container">
    <form method="POST" action="novocliente">
        <div class="form-group">
            <label>Nome cliente</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Nome empresa</label>
            <input type="text" name="empresa" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
