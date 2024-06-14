<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header, .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        main {
            padding-top: 80px;  
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div id="app">
        @include('layouts.navigation')
        <main>
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
