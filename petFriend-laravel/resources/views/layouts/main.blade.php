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

        {{-- JS do Bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        {{--css local--}}
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body class="antialiased">
        <header>
            {{--<nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <div class="logo-container">
                            <div id="title-subtitle-container">
                                <h1 id="logo-title">PetFriend</h1>
                                <span id="logo-subtitle">Para o seu melhor amigo</span>
                                <img src="/img/dog-track2.svg" alt="" id="logo-img" class="mb-2 mx-1">
                            </div>
                            {{--<img src="/img/dog-track.png" alt="" id="logo-img" class="mx-3 mt-3">--}}
                            
                        {{--</div>
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/agendar" class="nav-link">Agendar</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Cadastros</a>
                        </li>
                    </ul>
                </div>
            </nav>--}}
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">
                        <h1 id="logo-title">PetFriend<ion-icon name="paw" class="fs-4 mb-3"></ion-icon></h1>
                        <span id="logo-subtitle">Para o seu melhor amigo</span>
                    </a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Início</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{url('agendar')}}">Agendar</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Cadastros
                        </a>
                        <ul class="dropdown-menu fs-3" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Clientes</a></li>
                          <li><a class="dropdown-item" href="#">Pets</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Usuários</a></li>
                        </ul>
                      </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
        </header>
        <div class="container w-75 bg-light">
        
            @yield('content')
        
        </div>
        <footer class="mt-3">
            <p class="copy text-center">PetFriend {{date('Y')}} &copy;</p>
        </footer>

        {{-- ION ICONS --}}
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>
