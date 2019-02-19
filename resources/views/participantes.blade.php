@extends('layouts.app')

@section('titulo')

    Participantes

@endsection

@section('content')

    <h2>Participantes</h2>

    @foreach($participantes as $participante)

        <div class="p-3">
            Participante Nº {{ $i + 1 }}:
        </div>

        <div class="p-1">
            <a href="{{ route('eliminarParticipante', $participante -> id) }}" >
                <button
                        type="submit"
                        class="btn btn-danger"
                >
                    Eliminar
                </button>
            </a>

            <a href="{{ route('editarParticipante', $participante -> id) }}">
                <button
                        type="submit"
                        class="btn btn-secondary"
                >
                    Editar
                </button>
            </a>
        </div>

        <div class="invisible">{{ $i++ }}</div>

        <table class="table table-striped">
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
                @for($j = 0; $j < $campeonato -> count(); $j++)
                    @if($participante -> id_campeonato == $campeonato[$j] -> id)
                        <td>{{ $campeonato[$j] -> name }}, {{ $campeonato[$j] -> place }}</td>
                    @endif
                @endfor
            </tr>
            </tbody>
        </table>

        <br />

    @endforeach

@endsection