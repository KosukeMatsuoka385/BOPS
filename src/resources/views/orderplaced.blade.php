@extends("layouts.app")
@section("content")

	<!-- Body Start -->
	<div class="wrapper">
		<div class="gambo-Breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Order Placed</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="all-product-grid">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8">
						<div class="order-placed-dt">
							<i class="uil uil-check-circle icon-circle"></i>
							<h2>注文を承りました</h2>
                            <p>ご注文ありがとうございます!  <br>お受け取り店舗 - <span>{{ Session::get('store_name') }}</span>
                            <br>お受け取り予定時間 - <span>{{ Session::get('pick_time') }}</span></p>
							<div class="delivery-address-bg">
								<div class="title585">
									<div class="pln-icon"><i class="uil uil-telegram-alt"></i></div>
									<h5>注文内容は以下メールアドレスに送信致しました</h5>
								</div>
								<ul class="address-placed-dt1">
									<!-- <li><p><i class="uil uil-map-marker-alt"></i>Address :<span>#000, St 8, Sks Nagar, Near Pakhowal Road, Ldh, 141001</span></p></li>
									<li><p><i class="uil uil-phone-alt"></i>Phone Number :<span>+919999999999</span></p></li> -->
									<li><p><i class="uil uil-envelope"></i>Email Address :<span>{{$user->email}}</span></p></li>
									<!-- <li><p><i class="uil uil-card-atm"></i>Payment Method :<span>Cash on Delivery</span></p></li> -->
								</ul>
								<form method="GET" action="{{url('/myorder')}}">
								@csrf
								<div class="stay-invoice">
									<div class="st-hm">Stay Home<i class="uil uil-smile"></i></div>
									<button class="invc-link hover-btn" type="submit">注文状況を確認</button>
								</div>
								</form>
								<!-- <div class="placed-bottom-dt">
									The payment of <span>$16</span> you'll make when the deliver arrives with your order.
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<!-- Body End -->

@endsectionh