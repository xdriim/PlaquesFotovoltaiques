@extends('weather/app')

@section('contentw')
    @if ($notFound == 0)
        <div class="card">
        <h5 class="card-header">{{ $name.', '.$country }}</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $temp.'º' }}</h5>
            <p class="card-text">{{ $main.' ('.$weather.')' }}</p>
        </div>
        </div>
    @else
        <div class="card">
        <h5 class="card-header">{{ $city.' not found' }}</h5>
        </div>
    @endif

@endsection