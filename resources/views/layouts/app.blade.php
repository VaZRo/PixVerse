<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-black">
    <div id="app">
        <row>
        <nav class="navbar fixed-left navbar-light bg-black shadow-sm col-2 vh-100 text-white fs-4">
            <div class="container-fluid d-flex flex-row h-100 align-content-start p-4">
                <a class="navbar-brand d-flex justify-content-center pb-5 pt-2" href="{{ url('/') }}">
                    <div><img src="/svg/myInstaLogo.svg" alt="" style="max-height: 50px"/></div>
                </a>
                <div class="collapse navbar-collapse show" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav flex-column me-auto">
                        <!-- Add any additional links here if needed -->
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav flex-column ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a id="navbar" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="" aria-labelledby="navbarDropdown">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 content col-10 offset-2">
            @yield('content')
        </main>
        </row>
    </div>
</body>
</html>
