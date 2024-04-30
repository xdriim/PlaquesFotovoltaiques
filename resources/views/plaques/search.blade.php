@extends('template')

@section('title', 'Search')
@section('content')
    @foreach ($dada['rows'] as $barri)
    <div>
        {{ $barri['nom_barri'].', '.$barri['adreca'].' ('.$barri['emissions_estalv_KgCo2eq'].')' }} 
    </div>
    @endforeach
@endsection