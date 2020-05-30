@extends('layouts.app')

@section('content')
<style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Update Profile
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
        <form method="post" action="{{route('users.update', $user->id)}}">
                @csrf
                @method('PATCH')

            <input type="text" name="login"  value="{{ $user->login }}" />

            <input type="text" name="firstname"  value="{{ $user->firstname }}" />

            <input type="password" name="password" />

            <input type="password" name="password_confirmation" />

            <button type="submit"class="btn btn-primary">Update profile</button>
        </form>
    </div>
</div>
@endsection