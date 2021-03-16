@extends('layouts.app')

@section('titolo', 'home fashion')

@section('content')

    @foreach ($dresses as $dress)

        <div class="col-md-3">
            <h2> {{$dress->prodotto}} </h2>
            <h3> {{$dress->categoria}} </h3>
            <p>cod: {{$dress->cod}} </p>
            <h4>{{$dress->prezzo}} €</h4>
        </div>
        
    @endforeach
@endsection