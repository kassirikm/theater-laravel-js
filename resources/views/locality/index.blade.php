@extends('layouts.app')

@section('title', 'Liste des localités')

<?php
// Datatables function
/*
$(document).ready( function () {
    //$('#show_id').DataTable();
    $('#locality_id').DataTable();
} );
*/
?>

@section('content')
    <table id="locality_id" class="display">
        <h1>Liste des {{ $resource }}</h1>
        <thead>
            <tr>
                <th>locality</th>
                <th>postal code</th>
            </tr>
        </thead>
        <tbody>
                @foreach($localities as $locality)
                    <tr>
                        <td>{{ $locality->locality}}</td>
                        <td>{{ $locality->postal_code}}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
@endsection
