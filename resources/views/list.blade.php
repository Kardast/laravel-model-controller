@extends('templates.base')

@section('pageTitle', 'Database')

@section('pageMain')

    @foreach ($movies as $movie)

        <h1>{{ $movie->title }}</h1>

    @endforeach


    <a href="{{ route('home') }}">Home Page</a>
@endsection
