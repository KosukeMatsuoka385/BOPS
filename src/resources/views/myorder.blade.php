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
								<li class="breadcrumb-item active" aria-current="page">My Orders</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="dashboard-group">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="user-dt">
							<div class="user-img">
								<img src="{{ asset('/Frontend/images/avatar/img-5.jpg')}}" alt="">
								<div class="img-add">													
									<input type="file" id="file">
									<label for="file"><i class="uil uil-camera-plus"></i></label>
								</div>
							</div>
							<h4>{{$user->name}}</h4>
							<p>{{$user->phone}}<a href="#"><i class="uil uil-edit"></i></a></p>
							<div class="earn-points"><img src="{{ asset('/Frontend/images/Dollar.svg')}}" alt="">Points : <span>20</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-9 col-md-8">
						<div class="dashboard-right">
							<div class="row">
								<div class="col-md-12">
									<div class="main-title-tab">
										<h4><i class="uil uil-box"></i>My Orders</h4>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="pdpt-bg">
										<div class="pdpt-title">
											<h6>お受け取り予定時間 {{$my_order->order_pick_time}}</h6>
										</div> 
										<div class="order-body10">
											<ul class="order-dtsll">
												<li>
													<div class="order-dt-img">
														<img src="{{ asset('/Frontend/images/groceries.svg')}}" alt="">
													</div>
												</li>
												<li>
													<div class="order-dt47">
														<h4>{{$my_order->order_store_name}</h4>
														<p>{{$my_order->order_store_tel}}</p>
														<div class="order-title">購入詳細 <span data-inverted="" data-tooltip="詳細" data-position="top center">?</span></div>
													</div>
												</li>
											</ul>
											<div class="total-dt">
												<!-- <div class="total-checkout-group">
													<div class="cart-total-dil">
														<h4>Sub Total</h4>
														<span>$25</span>
													</div>
													<div class="cart-total-dil pt-3">
														<h4>Delivery Charges</h4>
														<span>Free</span>
													</div>
												</div> -->
												<div class="main-total-cart">
													<h2>合計金額</h2>
													<span>{{$my_order->order_total}}</span>
												</div>
											</div>
											<div class="track-order">
												<h4>注文状況</h4>
												<div class="bs-wizard" style="border-bottom:0;">   
													<div class="bs-wizard-step active">
														<div class="text-center bs-wizard-stepnum">注文受付</div>
														<div class="progress"><div class="progress-bar"></div></div>
														<a href="#" class="bs-wizard-dot"></a>
													</div>
													<div class="bs-wizard-step disabled"><!-- complete -->
														<div class="text-center bs-wizard-stepnum">ピッキング中</div>
														<div class="progress"><div class="progress-bar"></div></div>
														<a href="#" class="bs-wizard-dot"></a>
													</div>
													<div class="bs-wizard-step disabled"><!-- complete -->
														<div class="text-center bs-wizard-stepnum">準備完了</div>
														<div class="progress"><div class="progress-bar"></div></div>
														<a href="#" class="bs-wizard-dot"></a>
													</div>
													<div class="bs-wizard-step disabled"><!-- active -->
														<div class="text-center bs-wizard-stepnum">受け渡し済</div>
														<div class="progress"><div class="progress-bar"></div></div>
														<a href="#" class="bs-wizard-dot"></a>
													</div>
												</div>
											</div>
											<!-- <div class="alert-offer">
												<img src="{{ asset('/Frontend/images/ribbon.svg')}}" alt="">
												Cashback of $2 will be credit to Gambo Super Market wallet 6-12 hours of delivery.
											</div>
											<div class="call-bill">
												<div class="delivery-man">
													Delivery Boy - <a href="#"><i class="uil uil-phone"></i> Call Us</a>
												</div>
												<div class="order-bill-slip">
													<a href="#" class="bill-btn5 hover-btn">View Bill</a>
												</div>
											</div> -->
										</div>
									</div>
	
								</div>								
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-4">
						<div class="left-side-tabs">
							<div class="dashboard-left-links">
								<a href="dashboard_overview.html" class="user-item"><i class="uil uil-apps"></i>Overview</a>
								<a href="dashboard_my_orders.html" class="user-item active"><i class="uil uil-box"></i>My Orders</a>
								<a href="dashboard_my_rewards.html" class="user-item"><i class="uil uil-gift"></i>My Rewards</a>
								<a href="dashboard_my_wallet.html" class="user-item"><i class="uil uil-wallet"></i>My Wallet</a>
								<a href="dashboard_my_wishlist.html" class="user-item"><i class="uil uil-heart"></i>Shopping Wishlist</a>
								<a href="dashboard_my_addresses.html" class="user-item"><i class="uil uil-location-point"></i>My Address</a>
								<a href="sign_in.html" class="user-item"><i class="uil uil-exit"></i>Logout</a>
							</div>
						</div>
					</div>
				</div>	
			</div>	
		</div>	
	</div>
    <!-- Body End -->
	@endsection