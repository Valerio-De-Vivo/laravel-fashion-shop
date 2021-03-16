@extends('layouts.app')

@section('titolo', 'home fashion')

@section('content')

    <div class="d-flex flex-row flex-wrap">
        @foreach ($dresses as $dress)

        <div class="col-md-3 p-5">
            <h2> {{$dress->prodotto}} </h2>
            <p> {{$dress->categoria}} </p>
            <p>cod: {{$dress->cod}} </p>
            <h4>{{$dress->prezzo}} €</h4>
        </div>
        
    @endforeach
    </div>

    
@endsection