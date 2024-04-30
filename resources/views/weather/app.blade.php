<aside class="container my-5">
<form class="d-flex" role="search" action="{{ route('search') }}" method="get">
            @csrf
            <input class="form-control me-2" type="search" name="city" id="city" placeholder="Nom de la ciutat" aria-label="Nom de la ciutat">
            <button class="btn btn-outline-success" type="submit">Consultar</button>
</form>
    @yield('content')
</aside>
