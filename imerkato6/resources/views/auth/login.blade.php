@extends('htmlMasterPage')

@section('content')
    <!-- resources/views/auth/login.blade.php -->
    <h1>Login</h1>
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}

        <div>
            Email
            <input type="email" name=y3wesx"email" value="{{ old('email') }}">
        </div>

        <div>
            Password
            <input type="password" name="password" id="password">
        </div>

        <div>
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>

    @include('errors.list')
@stop