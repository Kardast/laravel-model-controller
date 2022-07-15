@extends('templates.base')

@section('pageTitle', 'Database')

@section('pageMain')

    <h1>{{ $duck }}</h1>
    <img src="{{ asset('img/duck.jpg') }}" alt="">
    <a href="{{ route('home') }}">Home Page</a>

@endsection
