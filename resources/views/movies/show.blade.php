@extends('layouts.main')

@section('content')
    <div class="container" id="show">
        <div class="bg">
            <h1> Titolo: {{ $movie -> title }} </h1>
            <h3> Titolo originale: {{ $movie-> original_title }} </h3>
            <h3> Data di rilascio:  {{ $movie-> date }} </h3>
            <h3> Nazione: {{ $movie-> nationality }} </h3>
            <h2> Media voto utenti: {{ $movie-> vote }} </h2>
            <a href=" {{ route('movies.index') }} ">Back</a>
        </div>
    </div>
@endsection