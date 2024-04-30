@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <table class="table table-striped table-hover">
                <thead class="sticky-top bg-light" >
                    <tr style="width: 100%">
                        <th scope="col">Latitud</th>
                        <th scope="col">Longitud</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Tipus d'equipament</th>
                        <th scope="col">Adreca</th>
                        <th scope="col">Nom del barri</th>
                        <th scope="col">Energia produida (kWh)</th>
                        <th scope="col">Potencia (kWp)</th>
                        <th scope="col">Emissions estalviades (KgCo2eq)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dada as $placa)
                        <tr class="">
                            <td>{{$placa['latitud']}}</td>
                            <td>{{$placa['longitud']}}</td>
                            <td>{{$placa['nom']}}</td>
                            <td>{{$placa['tipus_equipament']}}</td>
                            <td>{{$placa['adreca']}}</td>
                            <td>{{$placa['nom_barri']}}</td>
                            <td>{{$placa['energia_prod_kWh']}}</td>
                            <td>{{$placa['potencia_kWp']}}</td>
                            <td>{{$placa['emissions_estalv_KgCo2eq']}}</td>
                            <td>
                                <a href="{{url('/plaques/delete/'.$placa['id'])}}" class="btn btn-danger">Borrar</a>
                            </td>
                            <td>
                                <a href="{{url('/plaques/read/'.$placa['id'])}}" class="btn btn-info">Modifica</a>
                            </td>
                            <td>
                                <a href="{{url('/plaques/ver/'.$placa['id'])}}" class="btn btn-success">Veure</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
    </div>
</div>
@endsection
