<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @yield('extra-script')

    <!-- datatables library CSS with Bootstrap 4 -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.21/datatables.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- datatables library jQuery with Bootstrap 4 -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.21/datatables.min.js"></script>
    <!-- BS4 Filter script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Bootstrap 4 CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- CDN used by the Datatable library -->
    <!-- CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"></script>
    <script src="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"></script>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<!-- RSS -->
    @include('feed::links')
</head>

<body>
@if (session('success'))
<div class="alert alert-success">
    {{ session ('success')}}
</div>
@endif

<!-- <div id="app">-->
    @include('includes.header')

    <main class="container">
        @yield('content')
    </main>
<!-- JS paiement -->
@yield('extra-js')

<script>
    $(document).ready(function()
    {
        // "show" is the table id
        $('#show').DataTable();
    });
</script>

<!-- jQuery BS4 Filter script -->

<script>
    $(document).ready(function(){

        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#locality tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        <!-- filter the table with show as an ID -->
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#show tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@include('includes.footer')
</body>
</html>