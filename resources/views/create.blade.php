/**
 * Created by PhpStorm.
 * User: McFly
 * Date: 3/23/2020
 * Time: 9:34 AM
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
            Add Shows
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
            <form method="post" action="{{ route('shows.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">Show Name:</label>
                    <input type="text" class="form-control" name="show_name"/>
                </div>
                <div class="form-group">
                    <label for="price">Show Genre :</label>
                    <input type="text" class="form-control" name="genre"/>
                </div>
                <div class="form-group">
                    <label for="price">Show Rating :</label>
                    <input type="text" class="form-control" name="rating"/>
                </div>
                <div class="form-group">
                    <label for="quantity">Show Lead Actor :</label>
                    <input type="text" class="form-control" name="lead_actor"/>
                </div>
                <button type="submit" class="btn btn-primary">Create Show</button>
            </form>
        </div>
    </div>
@endsection