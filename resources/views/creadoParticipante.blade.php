@extends('layouts.app')

@section('titulo')

    Creado.

@endsection

@section('content')

    <h2 class="p-3">Creación de participante realizada con éxito.</h2>

    <h4 class="p-2">Datos introducidos:</h4>

    <div class="p-1">
        {{$participante ->  id}}
        <form action="{{ route('eliminarParticipante', $participante -> id) }}" >
            <button
                    type="submit"
                    class="btn btn-danger"
            >
                Eliminar
            </button>
        </form>

        <form action="{{ route('editarParticipante', $participante -> id) }}">
            <button
                    type="submit"
                    class="btn btn-secondary"
            >
                Editar
            </button>
        </form>
    </div>

    <table class="table table-striped p-2">
        <thead>
        <tr>
            <th scope="col">Nombre:</th>
            <td>{{ $participante -> name }}</td>
            <th scope="col">Género:</th>
            <td>{{ $participante -> gender }}</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Dojo:</th>
            <td>{{ $participante -> dojo }}</td>
            <th scope="row">Categoría:</th>
            <td>{{ $participante -> type }}</td>
        </tr>
        <tr>
            <th scope="row">Edad:</th>
            <td>{{ $participante -> age }} años</td>
            <th scope="row">Cinturón:</th>
            <td>{{ $participante -> belt }}</td>
        </tr>
        <tr>
            <th scope="row">Peso:</th>
            <td>{{ $participante -> weight }} kg</td>
            <th scope="row">Campeonato:</th>
            <td>{{ $campeonato -> name }}, {{ $campeonato -> place }}</td>
        </tr>
        </tbody>
    </table>

    <a href="{{ route('crearParticipante') }}" class="p-3">
        <button type="button" class="btn btn-light p-3">
            Volver
        </button>
    </a>

@endsection