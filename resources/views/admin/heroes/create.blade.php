@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Heroe</h1>

    <form action="{{ route('heroes.store') }}" method="post" enctype="multipart/form-data">
        @include('admin.heroes.form')

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection