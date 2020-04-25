
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
                    <label for="title">Title :</label>
                    <input type="text" class="form-control" name="title"/>
                </div>

                <div class="form-group">
                    <label for="poster_url">Poster URL :</label>
                    <input type="text" class="form-control" name="poster_url"/>
                </div>

                <div class="form-group">
                    <label for="bookable">Bookable :</label>
                    <input type="text" class="form-control" name="bookable"/>
                </div>

                <div class="form-group">
                    <label for="price">Price :</label>
                    <input type="text" class="form-control" name="price"/>
                </div>

                <button type="submit" class="btn btn-primary">Create Show</button>
            </form>
        </div>
    </div>
@endsection