@extends('layouts.app')

@section('title', 'Liste des localités')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <ul>
    @foreach($localities as $locality)
        <li>{{ $locality->locality}}</li>
    @endforeach
    </ul>
@endsection
