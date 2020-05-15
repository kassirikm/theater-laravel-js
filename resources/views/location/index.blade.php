
@extends('layouts.app')

@section('title', 'Liste des lieux de spectacle')

@section('content')
    <h1>Liste des {{ $resource }}</h1>
    <ul>
        @foreach($locations as $location)
            <li>{{ $location->designation }}
            </li>
        @endforeach
    </ul>

@endsection
