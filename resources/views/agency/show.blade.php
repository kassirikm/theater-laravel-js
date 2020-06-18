@extends('layouts.app')

@section('title', 'Liste des agences')

@section('content')
    <h1>{{ $agency->name}}</h1>
    <ul>
        @foreach($agency->artists as $artist)
            <li>{{ $artist->firstname }}</li>
        @endforeach
    </ul>
@endsection