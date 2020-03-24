/**
 * Created by PhpStorm.
 * User: McFly
 * Date: 3/23/2020
 * Time: 10:16 AM
 */

@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Update Artists
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('artists.update', $artist->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="firstname">First Name:</label>
                    <input type="text" class="form-control" name="first_name" value="{{ $artist->first_name }}"/>
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name :</label>
                    <input type="text" class="form-control" name="last_name" value="{{ $artist->last_name }}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update Artist</button>
            </form>
        </div>
    </div>
@endsection