@extends('layouts.app')

@section('titulo')

    Crear participantes

@endsection

@section('content')

        <h2 class="p-4">Crear participantes:</h2>


        <form
                class="row p-3"
                method="post"
                action="{{ route('participante') }}"
        >

            {!! csrf_field() !!}

            <div class="col">
                <div class="form-group">
                    <label>Nombre participante:</label>
                    <input
                            type="text"
                            class="form-control"
                            name="name"
                            aria-describedby="emailHelp"
                            placeholder="Ej: Pepita Pérez"
                    >
                </div>
                <div class="form-group">
                    <label>Dojo:</label>
                    <input
                            type="text"
                            class="form-control"
                            name="dojo"
                            placeholder="Ej: Dojo Alcaraz"
                    >
                </div>
                <div class="form-group">
                    <label>Género:</label>
                    <select name="gender" class="form-control">
                        <option>Masculino</option>
                        <option>Femenino</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Categoría:</label>
                    <select name="type" class="form-control">
                        <option>Kumite</option>
                        <option>Kata</option>
                        <option>Kata y kumite</option>
                    </select>
                </div>
                <button
                        type="submit"
                        class="btn btn-primary mt-4"
                >
                    Crear participante
                </button>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Edad:</label>
                    <div class="input-group">
                        <input
                                type="number"
                                class="form-control"
                                name="age"
                                placeholder="Ej: 16"
                        >
                        <div class="input-group-append">
                            <span class="input-group-text">Años</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Cinturón:</label>
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
                <div class="form-group">
                    <label>Peso: (sólo para categoría kumite)</label>
                    <div class="input-group">
                        <input
                                type="number"
                                class="form-control"
                                name="weight"
                                placeholder="Ej: 73"
                        >
                        <div class="input-group-append">
                            <span class="input-group-text">Kg</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Campeonato:</label>
                    <select name="championship" class="form-control">

                        @for($i = 0; $i < $campeonatos -> count(); $i++)

                            <option value="{{ $campeonatos[$i] -> id }}">
                                {{ $campeonatos[$i] -> name }}, {{ $campeonatos[$i] -> place }}
                            </option>

                        @endfor

                    </select>
                </div>
            </div>
        </form>

@endsection