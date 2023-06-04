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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-xl navbar-light bg-white shadow-sm navbar-fixed">
            <div class="container">
                    <a class="navbar-brand waves-effect fs-3 h2" href="{{ url('/') }}">
                        <img src="{{asset('img/logo.jpg')}}" alt="" style="width: 71px; border-radius: 35px;">
                    </a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <div>
                        <a class="text-decoration-none text-dark me-4 fs-5 fw-bold" href="{{ route('main') }}">Главная</a>
                        <a class="text-decoration-none text-dark me-4 fs-5 fw-bold" href="{{ route('catalog') }}">Товары и услуги</a>
                        <a class="text-decoration-none text-dark me-4 fs-5 fw-bold" href="{{ route('news') }}">Новости и статьи</a>
                        <a class="text-decoration-none text-dark me-4 fs-5 fw-bold" href="{{ route('Contacts') }}">Пользователям</a>
                    </div>
                    {{-- <div class="dropdown me-3 text-decoration-none text-dark me-4 fs-5 ">
                            <a class="dropdown-toggle text-decoration-none text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Пользователям
                            </a>

                            <ul class="dropdown-menu  ">
                              <li><a class="dropdown-item" href="{{ route('Contacts') }}">Обратная связь</a></li>
                            </ul>
                        </div> --}}
                    <ul class="navbar-nav ms-auto ">
                            <a href="{{route('Photos')}}" class="text-center me-4 text-decoration-none text-dark"><button class="btn btn-link text-decoration-none text-dark fs-5 fw-bold">Фотогалерея</button></a>
                        <!-- Authentication Links -->
                        {{-- @guest
                            @if (Route::has('login'))
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-dark col-12" href="{{ route('login') }}">{{ __('Войти') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class=" btn btn-dark text-white col-12" href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown fs-5">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest --}}
                        <a class="text-center" href="{{route('catalog')}}"><button class="btn btn-dark fs-5 " type="submit">Записаться на занятие</button></a>
                    </ul>
                </div>
            </div>
        </nav>
            @yield('content')
        @include('layouts.footer')
    </div>
</body>
</html>
