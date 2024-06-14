<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - Laravel</title>
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
            padding-top: 80px; /* Adjust this value to the height of your header */
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            margin-top: 20px;
        }

        .admin-sidebar {
            position: fixed;
            top: 80px; /* Adjust this value to the height of your header */
            bottom: 0;
            width: 250px;
            background-color: #f8f9fa;
            padding: 15px;
            overflow-y: auto;
        }

        .admin-content {
            margin-left: 270px; /* Adjust this value to the width of your sidebar */
            padding: 20px;
        }
    </style>
</head>
<body>
    <div id="app">
        @include('layouts.navigation')
        <div class="admin-sidebar">
            <h4>Admin Menu</h4>
            <ul class="list-unstyled">
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.users') }}">Manage Users</a></li>
                <li><a href="{{ route('admin.settings') }}">Settings</a></li>
                <li><a href="{{ route('admin.reports') }}">Reports</a></li>
            </ul>
        </div>
        <main class="admin-content">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
