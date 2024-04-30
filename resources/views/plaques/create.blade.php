@extends('template')

@section('title', 'Modifica')
@section('content')
<div class="container mb-5">
    <h1 class="text-center mt-5 mb-5">CREAR NOVA PLACA</h1>
    <div class="d-flex justify-content-center">
    <form class="w-75" action="{{route('plaques.store')}}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="latitud">Latitud:</label>
            <input class="form-control" type="text" id="latitud" name="latitud">  
        </div>
        <div class="form-group mb-3">
            <label for="longitud">Longitud:</label>
            <input class="form-control" type="text" id="longitud" name="longitud">  
        </div>
        <div class="form-group mb-3">
            <label for="nom">Nom:</label>
            <input class="form-control" type="text" id="nom" name="nom">  
        </div>
        <div class="form-group mb-3">
            <label for="tipus_equipament">Tipus d'equipament:</label>
            <input class="form-control" type="text" id="tipus_equipament" name="tipus_equipament">  
        </div>
        <div class="form-group mb-3">
            <label for="adreca">Adreca:</label>
            <input class="form-control" type="text" id="adreca" name="adreca">  
        </div>
        <div class="form-group mb-3">
            <label for="nom_barri">Nom del barri:</label>
            <input class="form-control" type="text" id="nom_barri" name="nom_barri">  
        </div>
        <div class="form-group mb-3">
            <label for="energia_prod_kWh">Energia produida (kWh):</label>
            <input class="form-control" type="text" id="energia_prod_kWh" name="energia_prod_kWh">  
        </div>
        <div class="form-group mb-3">
            <label for="potencia_kWp">Potencia (kWp):</label>
            <input class="form-control" type="text" id="potencia_kWp" name="potencia_kWp">  
        </div>
        <div class="form-group mb-3">
            <label for="emissions_estalv_KgCo2eq">Emissions estalviades (KgCo2eq):</label>
            <input class="form-control" type="text" id="emissions_estalv_KgCo2eq" name="emissions_estalv_KgCo2eq">  
        </div>

        <input  type="submit" value="Desar" class="btn btn-primary">   
    </form>
</div>
@endsection