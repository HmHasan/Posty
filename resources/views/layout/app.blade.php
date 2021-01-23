<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>POSTY</title>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white mb-4">
        <a class="navbar-brand" href="#">POSTY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                @auth
                <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                @endauth
                <li class="nav-item {{ request()->is('post') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('post') }}">Post</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @auth
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#">{{ auth()->user()->name }}</a>
                </li>
                <li class="nav-item">
                    <form action="{{ 'logout' }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
                @endauth
                @guest
                <li class="nav-item {{ request()->is('login') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item {{ request()->is('register') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                @endguest
                
                
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
