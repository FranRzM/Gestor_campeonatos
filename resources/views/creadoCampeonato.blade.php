@extends('layouts.app')

@section('titulo')

    Creado.

@endsection

@section('content')

    <h2 class="p-3">Creación de campeonato realizada con éxito.</h2>

    <h4 class="p-2">Datos introducidos:</h4>

    <table class="table table-striped p-2">
        <thead>
        <tr>
            <th scope="col">Nombre:</th>
            <td>{{ $campeonato -> name }}</td>
            <th scope="col">Lugar del evento:</th>
            <td>{{ $campeonato -> place }}</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Fecha del evento:</th>
            <td>{{ $campeonato -> date }}</td>
            <th scope="row">Categorías del campeonato:</th>
            <td>{{ $campeonato -> type }}</td>
        </tr>
        </tbody>
    </table>

    <a href="{{ route('crearCampeonato') }}" class="p-3">
        <button type="button" class="btn btn-light p-3">
            Volver
        </button>
    </a>

@endsection