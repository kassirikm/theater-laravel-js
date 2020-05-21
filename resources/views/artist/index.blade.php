@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Action</td>
                <td><a href="{{ route('artists.create')}}" class="btn btn-success">Add</a></td>
            </tr>
            </thead>
            <tbody>
            @foreach($artists as $artist)
                <tr>
                    <td>{{$artist->id}}</td>
                    <td>{{$artist->firstname}}</td>
                    <td>{{$artist->lastname}}</td>
                    <td><a href="{{ route('artists.edit', $artist->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('artists.destroy', $artist->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection