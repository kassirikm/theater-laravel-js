@extends('layouts.app')

@section('content')

<form method="post" action="{{route('users.update', $user)}}">
    {{ csrf_field() }}
    {{ method_field('patch') }}

    <input type="text" name="login"  value="{{ $user->login }}" />

    <input type="text" name="firstname"  value="{{ $user->firstname }}" />

    <input type="password" name="password" />

    <input type="password" name="password_confirmation" />

    <button type="submit">Send</button>
</form>