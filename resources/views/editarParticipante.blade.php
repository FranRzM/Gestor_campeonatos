@extends('layouts.app')

@section('titulo')

    Crear participantes

@endsection

@section('content')

        <h2 class="p-4">Crear participantes:</h2>


        <form
                class="row p-3"
                method="post"
                action="{{ route('editarParticipante', $participante -> id) }}"
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
                            value="{{ $participante -> name }}"
                    >
                </div>
                <div class="form-group">
                    <label>Dojo:</label>
                    <input
                            type="text"
                            class="form-control"
                            name="dojo"
                            placeholder="Ej: Dojo Alcaraz"
                            value="{{ $participante -> dojo }}"
                    >
                </div>
                <div class="form-group">
                    <label>Género:</label>
                    <select
                            name="gender"
                            class="form-control"
                            {{--value="{{ $participante -> name }}"--}}
                    >
                        @if($participante -> gender == 'Masculino')
                            <option selected="selected">Masculino</option>
                            <option>Femenino</option>
                        @else
                            <option>Masculino</option>
                            <option selected="selected">Femenino</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label>Categoría:</label>
                    <select name="type" class="form-control">
                        @if($participante -> type == 'Kumite')
                            <option selected="selected">Kumite</option>
                            <option>Kata</option>
                            <option>Kata y kumite</option>
                        @elseif($participante -> type == 'Kata')
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
                    Editar participante
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
                                value="{{ $participante -> age }}"
                        >
                        <div class="input-group-append">
                            <span class="input-group-text">Años</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Cinturón:</label>
                    <select name="belt" class="form-control">

                        @if($participante -> belt == '10º Kyu')

                            <option selected="selected">10º Kyu</option>
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

                        @elseif($participante -> belt == '9º Kyu')

                            <option>10º Kyu</option>
                            <option selected="selected">9º Kyu</option>
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

                        @elseif($participante -> belt == '8º Kyu')

                            <option>10º Kyu</option>
                            <option>9º Kyu</option>
                            <option selected="selected">8º Kyu</option>
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

                        @elseif($participante -> belt == '7º Kyu')

                            <option>10º Kyu</option>
                            <option>9º Kyu</option>
                            <option>8º Kyu</option>
                            <option @defaultselected="selected">7º Kyu</option>
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

                        @elseif($participante -> belt == '6º Kyu')

                            <option>10º Kyu</option>
                            <option>9º Kyu</option>
                            <option>8º Kyu</option>
                            <option>7º Kyu</option>
                            <option selected="selected">6º Kyu</option>
                            <option>5º Kyu</option>
                            <option>4º Kyu</option>
                            <option>3º Kyu</option>
                            <option>2º Kyu</option>
                            <option>1º Kyu</option>
                            <option>1º Dan</option>
                            <option>2º Dan</option>
                            <option>3º Dan</option>
                            <option>4º Dan</option>

                        @elseif($participante -> belt == '5º Kyu')

                            <option>10º Kyu</option>
                            <option>9º Kyu</option>
                            <option>8º Kyu</option>
                            <option>7º Kyu</option>
                            <option>6º Kyu</option>
                            <option selected="selected">5º Kyu</option>
                            <option>4º Kyu</option>
                            <option>3º Kyu</option>
                            <option>2º Kyu</option>
                            <option>1º Kyu</option>
                            <option>1º Dan</option>
                            <option>2º Dan</option>
                            <option>3º Dan</option>
                            <option>4º Dan</option>

                        @elseif($participante -> belt == '4º Kyu')

                            <option>10º Kyu</option>
                            <option>9º Kyu</option>
                            <option>8º Kyu</option>
                            <option>7º Kyu</option>
                            <option>6º Kyu</option>
                            <option>5º Kyu</option>
                            <option selected="selected">4º Kyu</option>
                            <option>3º Kyu</option>
                            <option>2º Kyu</option>
                            <option>1º Kyu</option>
                            <option>1º Dan</option>
                            <option>2º Dan</option>
                            <option>3º Dan</option>
                            <option>4º Dan</option>

                        @elseif($participante -> belt == '3º Kyu')

                            <option>10º Kyu</option>
                            <option>9º Kyu</option>
                            <option>8º Kyu</option>
                            <option>7º Kyu</option>
                            <option>6º Kyu</option>
                            <option>5º Kyu</option>
                            <option>4º Kyu</option>
                            <option selected="selected">3º Kyu</option>
                            <option>2º Kyu</option>
                            <option>1º Kyu</option>
                            <option>1º Dan</option>
                            <option>2º Dan</option>
                            <option>3º Dan</option>
                            <option>4º Dan</option>

                        @elseif($participante -> belt == '2º Kyu')

                            <option>10º Kyu</option>
                            <option>9º Kyu</option>
                            <option>8º Kyu</option>
                            <option>7º Kyu</option>
                            <option>6º Kyu</option>
                            <option>5º Kyu</option>
                            <option>4º Kyu</option>
                            <option>3º Kyu</option>
                            <option selected="selected">2º Kyu</option>
                            <option>1º Kyu</option>
                            <option>1º Dan</option>
                            <option>2º Dan</option>
                            <option>3º Dan</option>
                            <option>4º Dan</option>

                        @elseif($participante -> belt == '1º Kyu')

                            <option>10º Kyu</option>
                            <option>9º Kyu</option>
                            <option>8º Kyu</option>
                            <option>7º Kyu</option>
                            <option>6º Kyu</option>
                            <option>5º Kyu</option>
                            <option>4º Kyu</option>
                            <option>3º Kyu</option>
                            <option>2º Kyu</option>
                            <option selected="selected">1º Kyu</option>
                            <option>1º Dan</option>
                            <option>2º Dan</option>
                            <option>3º Dan</option>
                            <option>4º Dan</option>

                        @elseif($participante -> belt == '1º Dan')

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
                            <option selected="selected">1º Dan</option>
                            <option>2º Dan</option>
                            <option>3º Dan</option>
                            <option>4º Dan</option>

                        @elseif($participante -> belt == '2º Dan')

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
                            <option selected="selected">2º Dan</option>
                            <option>3º Dan</option>
                            <option>4º Dan</option>

                        @elseif($participante -> belt == '3º Dan')

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
                            <option selected="selected">3º Dan</option>
                            <option>4º Dan</option>

                        @elseif($participante -> belt == '4º Dan')

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
                            <option selected="selected">4º Dan</option>

                        @endif

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
                                value="{{ $participante -> weight }}"
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

                            <option
                                @if($participante -> id_campeonato == $campeonatos[$i] -> id)
                                    selected="selected"
                                @endif
                                value="{{ $campeonatos[$i] -> id }}">
                                {{ $campeonatos[$i] -> name }}, {{ $campeonatos[$i] -> place }}
                            </option>

                        @endfor

                    </select>
                </div>
            </div>
        </form>

@endsection