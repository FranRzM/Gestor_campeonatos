@extends('layouts.app')

@section('titulo')

    Participantes

@endsection

@section('content')

    @foreach($participantes as $participante)

        <div class="p-3">
            Participante Nº {{ $i }}
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
                <th scope="row">Estado:</th>
                <td>Inscrito</td>
            </tr>
            </tbody>
        </table>

        <div class="invisible">{{ $i++ }}</div>

    @endforeach

@endsection