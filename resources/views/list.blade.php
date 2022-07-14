@extends('templates.base')

@section('pageTitle', 'Database')

@section('pageMain')

    @foreach ($movies as $movie)

        <h1>{{ $movie->title }}</h1>
        <h4>{{ $movie->original_title }}</h4>
        <h4>{{ $movie->nationality }}</h4>
        <h4>{{ $movie->date }}</h4>
        <h4>{{ $movie['vote'] }}</h4>
    @endforeach


    <a href="{{ route('home') }}">Home Page</a>
@endsection
