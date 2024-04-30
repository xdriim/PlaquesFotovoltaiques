<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand " href="/">
            <img src="/icons/solar-panel.png" width="50" height="50" alt="" class="mx-4">PlaqueSolars
        </a>
        <ul class="navbar-nav">
            @if (auth()->check())
            <li class="nav-item active">
              <a class="nav-link" href="/plaques">CREAR PLACA</a>
            </li>
            @endif
            <li class="nav-item">
            @if (!auth()->check())
            <a class="btn me-2 logReg" href="{{ asset('/register')}}">Registrate</a>
            <a class="btn logReg" href="{{ asset('/login')}}">Iniciar Sesion</a>
            @else <h3>{{ Auth::user()->name}}</h3>
            <a class="btn me-2 logReg "href={{ asset('/cerrarsesion')}}>Cerrar sesión</a>
            @endif
            </li>
          </ul>
          <form method="GET" action="{{ route('plaques.search') }}">
            <label for="emssions">Emissions:</label>
            <input type="number" name="emissions">
            <br><br>
            <button type="submit">Buscar</button>
    </form>

    </nav>
    
    <main>
        @yield('content')
    </main>

</body>
</html>