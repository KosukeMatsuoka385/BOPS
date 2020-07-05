<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
	<!-- <script src="/js/jquery.min.js"></script> -->
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="{{ asset('/Frontend/images/fav.png') }}">

	<!-- Stylesheets -->
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="{{ asset('/Frontend/vendor/unicons-2.0.1/css/unicons.css') }}" rel='stylesheet'>
	<link href="{{ asset('/Frontend/css/style-cart.css') }}" rel="stylesheet">
	<link href="{{ asset('/Frontend/css/responsive-cart.css') }}" rel="stylesheet">
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
	<!-- {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> --}} -->
</head>

<body>
	<!-- Cart Sidebar Offset Start-->
	<div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
		<div class="bs-canvas-header side-cart-header p-3 ">
			<div class="d-inline-block  main-cart-title">カートの中身<span>(2)</span><span>品</span></div>
			<button type="button" class="bs-canvas-close close" aria-label="Close" onclick="location.href='/menus'" style="font-weight: 200; line-height: 1.3;">戻る</button>
		</div>
		<!-- カートの中身 -->
		<div class="bs-canvas-body">
			<div class="side-cart-items">
				<!-- foreachで表示 -->
				@for ($i = 0; $i < $count; $i++) <div class="cart-item">
					<div class="cart-text">
						<h4>{{ Session::get("name$i") }}</h4>
						<div class="qty-group">
							<div class="quantity buttons_added">
								<input type="button" value="-" class="minus minus-btn">
								<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
								<input type="button" value="+" class="plus plus-btn">
							</div>
							<div name="quantity" class="cart-item-price">{{ Session::get("price$i") }}円</div>
							<div class="cart-item-price">{{ Session::get("qty$i") }}つ</div>
						</div>
						<!-- 削除ボタン -->
						<form action="{{'/cart'}}" method="POST">
							{{(csrf_field())}}
							{{method_field('DELETE')}}
							<button type="submit" class="cart-close-btn">
								<i class="uil uil-multiply"></i>
							</button>
						</form>
					</div>
			</div>
			@endfor
		</div>
		<!-- foreachで表示 -->
		.
	</div>
	</div>
	<!-- カートの中身 -->

	<!-- checkout.blade.phpへ情報を送信 -->
	<form action="{{url('/checkout')}}" method="POST">
		{{csrf_field()}}
		<div class="bs-canvas-footer">
			<div class="main-total-cart">
				<h2>消費税</h2>
				<span>$tax</span>
			</div>
			<div class="main-total-cart">
				<h2>合計金額</h2>
				<span>$total</span>
			</div>
			<div class="checkout-cart">
				<!-- 受取店舗 -->
				<input type="hidden" name="store_id">
				<!-- 時間情報 -->
				<input type="hidden" name="time">
				<!-- 合計金額 -->
				<input type="hidden" name="total">
				<button type="submit" class="cart-checkout-btn hover-btn">注文を確定する</button>
			</div>
		</div>
	</form>
	<!-- checkout.blade.phpへ情報を送信 -->

	</div>
	<!-- Cart Sidebar Offsetl End-->
	<!-- Javascripts -->
	<script src="{{asset('/Frontend/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('/Frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('/Frontend/vendor/OwlCarousel/owl.carousel.js')}}"></script>
	<script src="{{asset('/Frontend/vendor/semantic/semantic.min.js')}}"></script>
	<script src="{{asset('/Frontend/js/cart.js')}}"></script>
	<script src="{{asset('/Frontend/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('/Frontend/js/custom-cart.js')}}"></script>
	<script src="{{asset('/Frontend/js/offset_overlay.js')}}"></script>
	<script src="{{asset('/Frontend/js/night-mode.js')}}"></script>
</body>

</html>