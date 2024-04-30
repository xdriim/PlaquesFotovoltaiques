@extends('template')

@section('title', 'Modifica')
@section('content')
    @foreach ($dada as $dada)
    @if ($dada['id'] == $identif)
    <div class="container mb-5">
        <h1 class="text-center mt-5 mb-5">MODIFICA UNA PLACA</h1>
        <div class="d-flex justify-content-center">
            <form class="w-75" action="{{route('plaques.update')}}" method="POST">
            @csrf   
            <input type="hidden" name="id" value="{{$dada['id']}}">
            <div class="form-group mb-3">
                <label for="latitud">Latitud:</label><br>
                <input class="form-control" type="text" id="latitud" name="latitud" value="{{$dada['latitud']}}"> 
            </div>
            <div class="form-group mb-3">
                <label for="longitud">Longitud:</label><br>
                <input class="form-control" type="text" id="longitud" name="longitud" value="{{$dada['longitud']}}"> 
            </div>
            <div class="form-group mb-3">
                <label for="nom">Nom:</label><br>
                <input class="form-control" type="text" id="nom" name="nom" value="{{$dada['nom']}}"> 
            </div>
            <div class="form-group mb-3">
                <label for="tipus_equipament">Tipus d'equipament:</label><br>
                <input class="form-control" type="text" id="tipus_equipament" name="tipus_equipament" value="{{$dada['tipus_equipament']}}"> 
            </div>
            <div class="form-group mb-3">
                <label for="adreca">Adreca:</label><br>
                <input class="form-control" type="text" id="adreca" name="adreca" value="{{$dada['adreca']}}"> 
            </div>
            <div class="form-group mb-3">
                <label for="nom_barri">Nom del barri:</label><br>
                <input class="form-control" type="text" id="nom_barri" name="nom_barri" value="{{$dada['nom_barri']}}">
            </div>
            <div class="form-group mb-3">
                <label for="energia_prod_kWh">Energia produida (kWh):</label><br>
                <input class="form-control" type="text" id="energia_prod_kWh" name="energia_prod_kWh" value="{{$dada['energia_prod_kWh']}}"> 
            </div>
            <div class="form-group mb-3">
                <label for="potencia_kWp">Potencia (kWp):</label><br>
                <input class="form-control" type="text" id="potencia_kWp" name="potencia_kWp" value="{{$dada['potencia_kWp']}}"> 
            </div>
            <div class="form-group mb-3">
                <label for="emissions_estalv_KgCo2eq">Emissions estalviades (KgCo2eq):</label><br>
                <input class="form-control" type="text" id="emissions_estalv_KgCo2eq" name="emissions_estalv_KgCo2eq" value="{{$dada['emissions_estalv_KgCo2eq']}}"><br>
            </div>
            <input type="submit" value="Editar" class="btn btn-primary"> 
        </form>
        </div>

    </div>
    @endif
    @endforeach
@endsection