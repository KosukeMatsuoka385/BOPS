<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BOPS') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


	<!-- 元々のapp.blade.phpに入っていたheadの内容を転記 -->
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="{{ asset('/Frontend/images/fav.png') }}">

	<!-- Stylesheets -->
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="{{ asset('/Frontend/vendor/unicons-2.0.1/css/unicons.css') }}" rel='stylesheet'>
	<link href="{{ asset('/Frontend/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('/Frontend/css/responsive.css') }}" rel="stylesheet">
	<link href="{{ asset('/Frontend/css/night-mode.css') }}" rel="stylesheet">

	<!-- Vendor Stylesheets -->
	<link href="{{ asset('/Frontend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/Frontend/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('/Frontend/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/Frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('/Frontend/vendor/semantic/semantic.min.css') }}">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> --}}

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container float-right">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'BOPS') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!-- Javascripts -->
	<script src="{{ asset('/Frontend/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('/Frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('/Frontend/vendor/OwlCarousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('/Frontend/vendor/semantic/semantic.min.js') }}"></script>
	<script src="{{ asset('/Frontend/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('/Frontend/js/custom.js') }}"></script>
	<script src="{{ asset('/Frontend/js/offset_overlay.js') }}"></script>
	<script src="{{ asset('/Frontend/js/night-mode.js') }}"></script>
</body>
</html>
