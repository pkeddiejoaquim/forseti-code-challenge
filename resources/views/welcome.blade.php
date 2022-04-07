<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'PrettusKlan Cia') }}</title>

        <link href="{{ url('imgs/sistema/forseti.png') }}" rel="shortcut icon" />
        <link href="{{ url(mix('site/css/app.css')) }}" type="text/css" rel="stylesheet" >

    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ url('home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class='fas fa-user-clock'></i>{{ Auth::user()->name }}
                        </a>

                    @else

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('login') }}" role="button" data-toggle="dropdraw" aria-haspopup="true">
                            <i class='fas fa-user-lock'></i>Login
                        </a>
                        <!-- <a href="{{ route('register') }}">Registrar</a> -->
                    @endauth
                </div>
            @endif

            <div class="content">
                <center><img width='100' src='imgs/sistema/forseti.png' alt='Logo Centro Advogados-Computatrum.Ius' /></center>
                <div class="azuis">
                    Forseti - Soluções
                </div>
                <br><br><br>
                <div class="links">
                    <a href="juridico/menu_jur">SERVIÇOS</a>
                    <a href="juridico/listatextos">NOTICIAS</a>
                </div>
            </div>
        </div>

    </body>
</html>
