@extends('layouts.app')

@section('titulo')

    Campeonatos

@endsection

@section('content')

    <h2>Campeonatos</h2>

    @foreach($campeonatos as $campeonato)

        <div class="p-3">
            Campeonato Nº {{ $i + 1 }}
        </div>

        <div class="p-1">
            <button
                    type="submit"
                    class="btn btn-danger"
                    formaction="{{ route('eliminarCampeonato') }}"
                    formmethod="DELETE"
                    value="{{ $campeonato -> id }}"
            >
                Eliminar
            </button>
            <button
                    type="submit"
                    class="btn btn-secondary"
                    formaction="{{ route('editarCampeonato') }}"
                    formmethod="get"
            >
                Editar
            </button>
        </div>

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
                <th scope="row">Categorías del evento:</th>
                <td>{{ $campeonato -> type }}</td>
            </tr>
            </tbody>
        </table>

        <div class="invisible">{{ $i++ }}</div>

    @endforeach

@endsection


{{--<div style="width: 0; height: 0; visibility: hidden;">--}}

{{--{{ $length = $participantes -> count() }}--}}
{{--{{ $ronda1 = $participantes }}--}}

{{--</div>--}}

{{--<div>--}}
{{--<table style="display: inline;" class="table table-striped p-2">--}}
{{--<thead style="display: inline;">--}}
{{--@for($i = 0; $i < $length; $i++)--}}
{{--<tr>--}}
{{--<td>--}}
{{--{{ $ronda1[$i] -> name }}--}}
{{--</td>--}}
{{--</tr>--}}
{{--@endfor--}}
{{--</thead>--}}
{{--<thead style="display: inline;">--}}
{{--@for($i = 0; $i < $length / 2; $i++)--}}
{{--<tr>--}}
{{--<td>--}}
{{--{{ $ronda1[$i] -> name }}--}}
{{--</td>--}}
{{--</tr>--}}
{{--@endfor--}}
{{--</thead>--}}
{{--<thead style="display: inline;">--}}
{{--@for($i = 0; $i < $length / 4; $i++)--}}
{{--<tr>--}}
{{--<td>--}}
{{--Participante Nº {{ $i + 1 }}--}}
{{--</td>--}}
{{--</tr>--}}
{{--@endfor--}}
{{--</thead>--}}

{{--<thead style="display: inline;">--}}
{{--@for($i = 0; $i < $length / 8; $i++)--}}
{{--<tr>--}}
{{--<td>--}}
{{--Participante Nº {{ $i + 1 }}--}}
{{--</td>--}}
{{--</tr>--}}
{{--@endfor--}}
{{--</thead>--}}
{{--</table>--}}
{{--</div>--}}