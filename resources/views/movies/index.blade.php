@extends('layouts.main')

@section('content')
    <div class="container">
        @foreach ($movies as $movie)
        <div class="card">
            <h1> {{ $movie -> title }} </h1>
            <h3> {{ $movie -> original_title }} </h3>
            <h3> {{ $movie -> date }} </h3>
            <a href=" {{ route('movies.show' , ['id' => $movie->id ]) }} ">More</a>
        </div>
        @endforeach

    </div>
@endsection