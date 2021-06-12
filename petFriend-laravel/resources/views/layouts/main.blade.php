<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {{--fontes do google--}}
        {{--Amatic SC--}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet"> 

        {{--Acme--}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Acme&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet"> 


        {{--bootstrap--}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        {{--css local--}}
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body class="antialiased">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <div class="logo-container">
                            <div id="title-subtitle-container">
                                <h1 id="logo-title">PetFriend</h1>
                                <span id="logo-subtitle">Para o seu melhor amigo</span>
                            </div>
                            {{--<img src="/img/dog-track.png" alt="" id="logo-img" class="mx-3 mt-3">--}}
                            
                        </div>
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Criar Evento</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        @yield('content')

        <footer>
            <p>PetFriend &copy;</p>
        </footer>
    </body>
</html>