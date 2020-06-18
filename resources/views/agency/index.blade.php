<!--
<p>
    Hello World
</p>
-->

@extends('layouts.app')

@section('title', 'Liste des agences')

@section('content')
    <div class="container">
        <h2>Filterable Table</h2>
        <p>Type something in the input field to search and filter the table</p>
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <br>
        <table class="table table-striped">
            <h1>Liste des agences</h1>
            <thead>
            <tr>
                <th>nom</th>
            </tr>
            </thead>
            <tbody id="agency">
            @foreach($agencies as $agency)
                <tr>
                    <td>{{ $agency->$agency}}</td>
                    <td>{{ $agency->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection






