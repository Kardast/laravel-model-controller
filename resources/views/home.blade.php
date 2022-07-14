@extends('templates.base')

@section('pageTitle', 'Database')

@section('pageMain')
    <h2>
        <a href="{{ route('duck') }}">Duck Page</a>
    </h2>

    <h2>

        <a href="{{ route('list') }}">List Page</a>
    </h2>

@endsection
