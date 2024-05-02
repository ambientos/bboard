<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
<ul>
    <li>
        <a href="{{ route('index') }}" class="navbar-brand me-auto">Главная</a>
    </li>
    @guest
        <li>
            <a href="{{ route('register') }}" class="nav-item nav-link">Регистрация</a>
        </li>
        <li>
            <a href="{{ route('login') }}" class="nav-item nav-link">Вход</a>
        </li>
    @else
        <li>
            <a href="{{ route('home') }}" class="nav-item nav-link">Мои объявления</a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Выйти</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    @endguest
</ul>

@yield('content')
</body>
</html>
