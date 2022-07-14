@extends('templates.base')

@section('pageTitle', 'Database')

@section('pageMain')

    <h1>{{ $duck }}</h1>
    <a href="{{ route('home') }}">Home Page</a>

@endsection
