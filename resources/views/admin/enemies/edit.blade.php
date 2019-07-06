@extends('layouts.app')

@section('content')
<h1>Editar Enemigo - {{ $enemy->name }}</h1>

    <form action="{{ route('enemy.update', ['id' => $enemy->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $enemy->name }}" placeholder="Ingrese un nombre" required>
        </div>

        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" value="{{ $enemy->hp }}" placeholder="Ingrese los puntos de vida" required>
        </div>

        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq" name="atq" value="{{ $enemy->atq }}" placeholder="Ingrese los puntos de ataque" required>
        </div>

        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" name="def" value="{{ $enemy->def }}" placeholder="Ingrese los puntos de defensa" required>
        </div>

        <div class="form-group">
            <label for="coins">Monedas</label>
            <input type="number" class="form-control" id="coins" name="coins" value="{{ $enemy->coins }}"  placeholder="Ingrese la cantidad de monedas" required>
        </div>

        <div class="form-group">
            <label for="xp">Experiencia</label>
            <input type="number" class="form-control" id="xp" name="xp" value="{{ $enemy->xp }}" placeholder="Ingrese la experiencia" required>
        </div>

        <button type="submit" class="btn btn-warning">Editar</button>
    </form>
@endsection