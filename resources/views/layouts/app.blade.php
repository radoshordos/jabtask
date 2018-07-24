<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'JabTask') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('component/bootstrap/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('component/select2/css/select2.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'JabTask') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @auth
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{ url('jabtask_events') }}">Posledni události</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('jabtask_users') }}">Klienti</a>
                        </li>
                    </ul>
                @endauth
                <ul class="navbar-nav mr-auto">
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">Přihlásit</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">Registrovat</a></li>
                    @else


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/login-activity') }}"><i class="fa fa-btn fa-list"></i>Přehled přihlášení</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
        </div>
    </nav>

    <div class="container">
        @include('flash::message')
        @if(isset($errors) && !empty($errors->toArray()))
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @yield('content')
    </div>
</div>
<script src="{{ asset('/component/jquery/jquery.js') }}"></script>
<script src="{{ asset('/component/popper/popper.min.js') }}"></script>
<script src="{{ asset('/component/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/component/select2/js/select2.js') }}"></script>
<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@yield('scripts')
</body>
</html>