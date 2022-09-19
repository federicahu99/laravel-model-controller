@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="bg">
            <h1> {{ $movie -> title }} </h1>
            <h3> {{ $movie-> original_title }} </h3>
            <h3> {{ $movie-> date }} </h3>
            <h3> {{ $movie-> nationality }} </h3>
            <h3> {{ $movie-> vote }} </h3>
            <a href=" {{ route('movies.index') }} ">Back</a>
        </div>
    </div>
@endsection