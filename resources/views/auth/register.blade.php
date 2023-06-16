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

        <link rel="stylesheet" href="{{ asset('register.css') }}">
    </head>

    <body id="RegisterForm">

        <div class="container">
            {{-- <h1 class="form-heading">register Form</h1> --}}
            <div class="register-form">
                <div class="main-div">
                    <div class="panel">
                        <h2>Formulario de Registro</h2>
                        <br>

                    </div>

                    <form id="register" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">

                            <!--- For Name---->
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label class="name"> Nombre Completo</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" placeholder="Ingrese su Nombre Completo" required
                                            autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-----For email---->
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label class="mail">Email</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" placeholder="Ingrese su Email" required
                                            autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-----For Password and confirm password---->
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label for="password" class="password"> Contraseña</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Ingrese su Contraseña"
                                            required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- col-md-4 col-form-label text-md-end --}}
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label for="password-confirm"
                                            class="password col-form-label">Confirme Contraseña</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" placeholder="Ingrese su Contraseña nuevamente" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
<br>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" class="btn btn-primary ">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
