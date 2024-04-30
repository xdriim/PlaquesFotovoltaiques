@extends('template')

@section('title', 'Modifica')
@section('content')   
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title mb-4">Placa de {{$data['nom']}}</h1>
            <div class="card-text mb-2">Latitud:  {{$data['latitud']}}</div>
            <div class="card-text mb-2">Longitud:  {{$data['longitud']}}</div>
            <div class="card-text mb-2">Equipament:  {{$data['tipus_equipament']}}</div>
            <div class="card-text mb-2">Adreça:  {{$data['adreca']}}</div>
            <div class="card-text mb-2">Barri:  {{$data['nom_barri']}}</div>
            <div class="card-text mb-2">Energia(kWh):  {{$data['energia_prod_kWh']}}</div>
            <div class="card-text mb-2">Potencia(kWp):  {{$data['potencia_kWp']}}</div>
            <div class="card-text mb-2">Emissions Estalviades(KgCo2eq):  {{$data['emissions_estalv_KgCo2eq']}}</div>
        </div>

    </div>
</div>


@endsection