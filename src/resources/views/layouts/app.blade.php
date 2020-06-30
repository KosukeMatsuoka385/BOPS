<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example</title>
<!-- Gambo -->
<!-- Favicon Icon -->
<link rel="icon" type="image/png" href="images/fav.png">

<!-- Stylesheets -->
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href={{ asset('/Frontend/vendor/unicons-2.0.1/css/unicons.css') }} rel='stylesheet'>
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="text-right"><a class="btn btn-default btn-lg" href="/">Home</a></div>
        </nav>
    </div>
    @yield("content")

    <!-- Javascripts -->
	<script src="{{ asset('/Frontend/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('/Frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('/Frontend/vendor/OwlCarousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('/Frontend/vendor/semantic/semantic.min.js') }}"></script>
	<script src="{{ asset('/Frontend/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('/Frontend/js/custom.js') }}"></script>
	<script src="{{ asset('/Frontend/js/offset_overlay.js') }}j"></script>
	<script src="{{ asset('/Frontend/js/night-mode.js') }}"></script>
</body>
</html>
