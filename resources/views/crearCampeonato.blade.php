@extends('layouts.app')

@section('titulo')

    Crear campeonato

@endsection

@section('content')

    <h2 class="p-4">Crear campeonato:</h2>


    <form
            class="row p-3"
            method="post"
            action="/campeonato"
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
                >
            </div>
            <div class="form-group">
                <label>Lugar del evento:</label>
                <input
                        type="text"
                        class="form-control"
                        name="place"
                        placeholder="Ej: Polideportivo San José."
                >
            </div>
            <div class="form-group">
                <label>Fecha del evento:</label>
                <input name="date" class="form-control" type="date" />
            </div>
            <div class="form-group">
                <label>Categorías del campeonato:</label>
                <select name="type" class="form-control">
                    <option>Kumite</option>
                    <option>Kata</option>
                    <option>Kata y kumite</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Categorías por edad:</label>
                <input
                        type="number"
                        class="form-control"
                        name="age"
                        placeholder="Ej: 16"
                >
            </div>
            <div class="form-group">
                <label class="row">Categoría por cinturón para katas:</label>
                <div class="row">
                    <div class="col">
                        <label>Menos de:</label>
                        <select name="belt" class="form-control">
                            <option>10º Kyu</option>
                            <option>9º Kyu</option>
                            <option>8º Kyu</option>
                            <option>7º Kyu</option>
                            <option>6º Kyu</option>
                            <option>5º Kyu</option>
                            <option>4º Kyu</option>
                            <option>3º Kyu</option>
                            <option>2º Kyu</option>
                            <option>1º Kyu</option>
                            <option>1º Dan</option>
                            <option>2º Dan</option>
                            <option>3º Dan</option>
                            <option>4º Dan</option>
                        </select>
                    </div>
                    <div class="col">
                        <label>Más de:</label>
                        <select name="belt" class="form-control">
                            <option>10º Kyu</option>
                            <option>9º Kyu</option>
                            <option>8º Kyu</option>
                            <option>7º Kyu</option>
                            <option>6º Kyu</option>
                            <option>5º Kyu</option>
                            <option>4º Kyu</option>
                            <option>3º Kyu</option>
                            <option>2º Kyu</option>
                            <option>1º Kyu</option>
                            <option>1º Dan</option>
                            <option>2º Dan</option>
                            <option>3º Dan</option>
                            <option>4º Dan</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label>Categorías por peso en kilogramos para kumite:</label>
                <input
                        type="number"
                        class="form-control"
                        name="weight"
                        placeholder="Ej: 73"
                >
            </div>
            <button
                    type="submit"
                    class="btn btn-primary mt-4"
            >
                Crear campeonato
            </button>
        </div>
    </form>

@endsection
