@extends('layouts.app')
@section('title')
login
@endsection
@section('content')
    <!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css') }}">
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">--}}
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <label for="chk" aria-hidden="true">Sign up</label>

            <input id="name" type="text" placeholder="User name" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong class="text-center">{{ $message }}</strong>
                                    </span>
            @enderror

            <input id="email" type="email" placeholder="Email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong class="text-center">{{ $message }}</strong>
                                    </span>
            @enderror

            <input id="password" type="password" placeholder="Password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong class="text-center">{{ $message }}</strong>
                                    </span>
            @enderror
            <input id="password-confirm" type="password" class="" placeholder="confirm password" name="password_confirmation" required autocomplete="new-password">

            <button type="submit">Sign Up</button>
        </form>
    </div>

    <div class="login">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <label for="chk" aria-hidden="true">Login</label>

            <input id="email" type="email" placeholder="Email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password" type="password" placeholder="Password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <button >Login</button>
        </form>
    </div>
</div>
</body>
</html>
@endsection
