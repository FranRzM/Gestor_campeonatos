@extends('layouts.app')

@section('titulo')

    Eliminado.

@endsection

@section('content')

    <h2 class="p-3">Eliminación de campeonato realizada con éxito.</h2>

    <a href="{{ route('campeonato') }}" class="p-3">
        <button type="button" class="btn btn-light p-3">
            Volver
        </button>
    </a>

@endsection