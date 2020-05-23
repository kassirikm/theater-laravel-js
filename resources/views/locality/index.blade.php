@extends('layouts.app')

@section('title', 'Liste des localités')

@section('content')
    <div class="container">
        <h2>Filterable Table</h2>
        <p>Type something in the input field to search and filter the table</p>
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <br>
        <table class="table table-striped">
            <h1>Liste des {{ $resource }}</h1>
            <thead>
            <tr>
                <th>locality</th>
                <th>postal code</th>
            </tr>
            </thead>
            <tbody id="locality">
            @foreach($localities as $locality)
                <tr>
                    <td>{{ $locality->locality}}</td>
                    <td>{{ $locality->postal_code}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection






