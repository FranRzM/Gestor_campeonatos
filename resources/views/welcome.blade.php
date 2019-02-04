<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio | Gestor campeonatos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a
                                id="navbarDropdown"
                                class="nav-link dropdown-toggle"
                                href="{{ route('home') }}"
                        >
                            {{ $user = \Illuminate\Support\Facades\Auth::user() -> name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a
                                    href="{{ route('logout') }}"
                                    class="dropdown-item"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                            >
                                {{ __('Logout') }}
                            </a>

                        </div>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Gestor de campeonatos
                </div>

                <div class="m-b-md">
                    Esta es una app para gestionar campeonatos de artes marciales.
                </div>

                @if (Route::has('login'))
                    <div class="links">
                        @auth
                                <a class="nav-link" href="{{ route('crearParticipante') }}">Crear participantes</a>
                                <a class="nav-link" href="/participante">Participantes</a>
                                <a class="nav-link" href="{{ route('crearCampeonato') }}">Crear campeonato</a>
                                <a class="nav-link" href="{{ route('campeonato') }}">Campeonatos</a>
                                {{--<a class="nav-link" href="{{ route('ganadores') }}">Ganadores</a>--}}
                        @else
                            <a href="{{ route('login') }}">Iniciar sesión</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Registrarse</a>
                            @endif
                        @endauth
                    </div>
                @endif

            </div>
        </div>
    </body>
</html>
