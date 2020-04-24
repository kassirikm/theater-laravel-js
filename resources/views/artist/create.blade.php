<!--
/**
 * Created by PhpStorm.
 * User: McFly
 * Date: 3/23/2020
 * Time: 9:34 AM
 */
 -->

@extends('layout')
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add Artists
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
            <form method="post" action="{{ route('artists.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">First Name :</label>
                    <input type="text" class="form-control" name="first_name"/>
                </div>

                <div class="form-group">
                    @csrf
                    <label for="name">Last Name :</label>
                    <input type="text" class="form-control" name="last_name"/>
                </div>
                <button type="submit" class="btn btn-primary">Add Artist</button>
            </form>
        </div>
    </div>
@endsection