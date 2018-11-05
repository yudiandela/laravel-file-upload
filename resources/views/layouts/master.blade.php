<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSRF Token Initial --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title>{{ config('app.name', 'File Upload') }}</title>

    {{-- Script Compile --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- Style Compile --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg text-white bg-primary-custom d-none d-lg-block">
            <div class="container">
                <div class="ml-auto">
                    <ul class="navbar-nav top-nav">
                        <li class="nav-item"><i class="fa fa-envelope"></i> email@example.mail</li>
                        <li class="nav-item"><i class="fa fa-users"></i> Total Members: <span>123456</span></li>
                        <li class="nav-item"><i class="fas fa-chart-line"></i> Total Paid: <span>$311490.06</li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary-custom">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'File Upload') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ml-2">
                                    <a class="btn btn-primary btn-sm rounded-0 text-white nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> {{ __('Masuk') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-primary btn-sm rounded-0 text-white nav-link" href="{{ route('register') }}"><i class="fas fa-user-alt"></i> {{ __('Daftar Baru') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="btn btn-primary btn-sm rounded-0 text-white nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-alt"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right rounded-0" aria-labelledby="navbarDropdown">
                                    <a class="btn btn-primary btn-sm dropdown-item" href="{{ route('home') }}">
                                        <i class="fas fa-home"></i> {{ __('Dashboard') }}
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <a class="btn btn-primary btn-sm dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content mt-5">
            @yield('content')
        </div>

        <div class="container-fluid mt-5 bg-primary-custom pt-5 pb-2">
            <div class="row">
                <div class="col-12 footer text-center text-white">
                    [ ] with ❤ in Aceh Besar - (Naggroe Aceh Darussalam), Indonesia
                    <ul class="nav my-2 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Term of Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>