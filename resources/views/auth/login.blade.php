@extends('layouts.app')

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <head>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="{{ asset('login.css') }}">
    </head>

    <body id="LoginForm">

        <div class="container">
            {{-- <h1 class="form-heading">login Form</h1> --}}
            <div class="login-form">
                <div class="main-div">
                    <div class="panel">
                        <h2>Inicio de Sesion</h2>
                        <br>

                    </div>

                    <form id="Login" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email"
                                autofocus>
                            <br>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña"
                                name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Olvido su Contraseña?') }}
                                </a>
                            @endif

                            <button type="submit" class="btn btn-primary mb-3">
                                {{ __('Ingresar') }}
                            </button>
                            <a class="btn btn-primary" href="http://127.0.0.1:8000/register">Quiero registrarme</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
