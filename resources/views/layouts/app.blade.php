<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-custom {
            background-color: #A6C7E4;
            padding: 10px 0;
        }
        image{
            width: 10%;
        }
        .cartnav{
            margin-right: 10px;
        }
        .cartnav img{
            width: 30px;
        }
        .navbar-custom .navbar-brand img {
            height: 50px;
        }
        .navbar-custom .nav-link {
            color: #003566;
            font-weight: bold;
        }
        .navbar-custom .nav-link:hover {
            color: #000;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-logo {
            width: 100px;
            height: auto;
            margin-bottom: 10px;
        }

        .profile-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #0044cc;
        }

        .profile-nav {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .profile-nav-link {
            font-size: 1.1rem;
            font-weight: bold;
            color: #333;
            text-decoration: none;
            padding: 10px 20px;
            border-bottom: 2px solid transparent;
        }

        .profile-nav-link:hover,
        .profile-nav-link.active {
            border-bottom: 2px solid #0044cc;
        }

        .profile-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .profile-picture {
            position: relative;
            margin-bottom: 20px;
        }

        .profile-picture img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid #0044cc;
        }

        .edit-picture-btn {
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: #fff;
            border: none;
            font-size: 1rem;
            cursor: pointer;
        }

        .form-group {
            width: 100%;
            max-width: 500px;
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: #0044cc;
            border: none;
            color: #fff;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://upload.wikimedia.org/wikipedia/en/e/eb/Manchester_City_FC_badge.svg" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/news') }}">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/shop') }}">SHOP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/players') }}">PLAYERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/club') }}">CLUB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">ABOUT</a>
                        </li> 
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="cartnav" href="{{ url('/cart') }}"><img src="images/cart.png" alt="cart"></a>
                        </li>
                       
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.show', Auth::user()->id) }}">{{ Auth::user()->name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('resources/js/form-validation.js') }}"></script>

</body>
</html>
