@extends('layouts.app')

@section('titulo')

    Editar campeonato

@endsection

@section('content')

    <h2 class="p-4">Editar campeonato:</h2>

    <form
            class="row p-3"
            method="post"
            action="{{ route('editarCampeonato', $campeonato -> id) }}"
    >

        {!! csrf_field() !!}

        <div class="col">
            <div class="form-group">
                <label>Nombre campeonato:</label>
                <input
                        type="text"
                        class="form-control"
                        name="name"
                        aria-describedby="emailHelp"
                        placeholder="Ej: Campeonato Ciudad del Sol."
                        value="{{ $campeonato -> name }}"
                >
            </div>
            <div class="form-group">
                <label>Lugar del evento:</label>
                <input
                        type="text"
                        class="form-control"
                        name="place"
                        placeholder="Ej: Polideportivo San José."
                        value="{{ $campeonato -> place }}"
                >
            </div>
            <div class="form-group">
                <label>Fecha del evento:</label>
                <input
                        name="date"
                        class="form-control"
                        type="date"
                        value="{{ $campeonato -> date }}"
                />
            </div>
            <div class="form-group">
                <label>Categorías del campeonato:</label>
                <select name="type" class="form-control">

                    @if($campeonato -> type == 'Kumite')
                        <option selected="selected">Kumite</option>
                        <option>Kata</option>
                        <option>Kata y kumite</option>
                    @elseif($campeonato -> type == 'Kata')
                        <option>Kumite</option>
                        <option selected="selected">Kata</option>
                        <option>Kata y kumite</option>
                    @else
                        <option>Kumite</option>
                        <option>Kata</option>
                        <option selected="selected">Kata y kumite</option>
                    @endif

                </select>
            </div>
            <button
                    type="submit"
                    class="btn btn-primary mt-4"
            >
                Editar campeonato
            </button>
        </div>
    </form>
@endsection