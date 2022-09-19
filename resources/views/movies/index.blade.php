@extends('layouts.main')

@section('content')
    <div id="index" class="container">
        @foreach ($movies as $movie)
        <div class="card">
            <h1> {{ $movie -> title }} </h1>
            <h3> {{ $movie -> original_title }} </h3>
            <h4> {{ $movie -> date }} </h4>
            <a href=" {{ route('movies.show' , ['id' => $movie->id ]) }} ">More</a>
        </div>
        @endforeach

    </div>
@endsection