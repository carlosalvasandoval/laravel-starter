<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bubble/orionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bubble/style.sea.css') }}">
    @yield('styles')

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow">
            @auth
            <a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead" @click="toggleSidebar">
                <i class="fas fa-align-left"></i>
            </a>
            @endauth
            <a href="{{ url('/') }}" class="navbar-brand font-weight-bold text-uppercase text-base">
                {{ config('app.name', 'Toolbox') }}
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
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

                    <li class="nav-item dropdown ml-auto">
                        <a id="userInfo" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="nav-link dropdown-toggle">
                            <i class="o-user-1"></i>
                        </a>
                        <div aria-labelledby="userInfo" class="dropdown-menu">
                            <a href="#" class="dropdown-item"><strong
                                    class="d-block text-uppercase headings-font-family">
                                    {{ Auth::user()->name }}</strong></a>
                            <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Perfil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
       
        <div class="d-flex align-items-stretch">
            @auth
            @include('layouts.partials.sidebar')
            @endauth
            <div class="py-4 page-holder w-100">
                <div class="container">
                    @include('layouts.partials.flashMessage')
                </div>
                @yield('content')
            </div>
        </div>

    </div>
    <script src="{{ asset('vendor/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        var BASE_URL = "{{ url('/') }}/";
    </script>
    @yield('scripts')
</body>

</html>