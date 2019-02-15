@extends('layouts.app')

@section('titulo')

    Creado.

@endsection

@section('content')

    <h2 class="p-3">Eliminación de participante realizada con éxito.</h2>

    <a href="{{ route('participante') }}" class="p-3">
        <button type="button" class="btn btn-light p-3">
            Volver
        </button>
    </a>

@endsection