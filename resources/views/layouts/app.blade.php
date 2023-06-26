<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('img/logo.jpg')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>БЕГОВЕЛиК</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css\app.css')}}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('main') }}">
                        <img src="{{ asset('img/logo.jpg') }}" alt="" style="width: 71px; border-radius: 35px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0 text-dark fw-bold">
                            <li class="nav-item">
                                <a class="nav-link text-dark " href="{{ route('main') }}">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark " href="{{ route('catalog') }}">Услуги</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark " href="{{ route('news.index') }}">Новости и статьи</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark " href="{{ route('Contacts') }}">Пользователям</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark " href="{{ route('Photos') }}">Фотогалерея</a>
                            </li>
                            @auth
                            <li class="nav-item">
                                <a class="nav-link text-dark " href="{{ route('admin') }}">Админ-панель</a>
                            </li>
                            @endauth
                        </ul>
                        <a class="text-center" href="{{ route('catalog') }}">
                            <button class="btn btn-dark">Записаться на занятие</button>
                        </a>
                        @auth
                            <a class="btn btn-danger m-3" href="{{ route('logout') }}">Выйти</a>
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
            @yield('content')
        @include('layouts.footer')
    </div>
</body>
</html>

