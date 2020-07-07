@extends("layouts.app")
@section("content")

	<form method="POST" action="/cart" name="myform">
		{{ csrf_field() }}
	<div class="wrapper">
		<!-- Offers Start -->
		<div class="main-banner-slider">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-title-tt">
							<div class="main-title-left">
								<span>Recommend</span>
								<h2>本日のおすすめ</h2>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="owl-carousel offers-banner owl-theme">
							@foreach ($recommend_items as $recommend_item)
							<div class="item">
								<div class="offer-item">
									<div class="offer-item-img">
										<div class="gambo-overlay"></div>
										<img style="width:340px; height:480px; object-fit:cover" src="{{ $recommend_item->pop_img }}" alt="">
									</div>
									<div class="offer-text-dt">
										{{-- <div class="offer-top-text-banner">
											<p>6% Off</p>
											<div class="top-text-1">Buy More & Save More</div>
											<span>Fresh Vegetables</span>
										</div> --}}
										<span href="#" class="Offer-shop-btn hover-btn"><input type="checkbox"  name="items[]" value="{{ json_encode($recommend_item,JSON_UNESCAPED_UNICODE) }}">   {{ $recommend_item->item_price }}円</span>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Offers End -->
		<!-- Categories Start -->
		<div class="section145">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-title-tt">
							<div class="main-title-left">
								<span>Plus One</span>
								<h2>プラスワン</h2>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="owl-carousel cate-slider owl-theme">
							@foreach ($categories as $category)
							<div class="item">
								<span href="#" class="category-item">
									<div class="cate-img">
										<img src="{{ asset($category->img) }}" alt="">
									</div>
									<h4>{{ $category->name }}</h4>
								</span>
								{{-- <ul id="accordion" class="accordion"> --}}
								<ul class="accordion">
									<li>
										<div class="link">
											{{-- <i class="fa fa-paint-brush"></i> --}}
											<span>
												{{ $category->name }}
											</span>
											<i class="fa fa-chevron-down"></i>
										</div>
										<ul class="submenu">
											@foreach($category_items as $category_item)
											@if ($category_item->category_id == $category->id)
											<li>
												<input type="checkbox" name="items[]" value='{{ json_encode($category_item,JSON_UNESCAPED_UNICODE) }}'>
												{{-- <input type="checkbox" name="items[]" value='{{ $umenu_item }}'> --}}
												<span href="#">{{ $category_item->item_name }}</span>
												<span href="#" class="price_right">{{ $category_item->item_price }}円</span>
											</li>
											@else
											@endif
											@endforeach
										</ul>
									</li>
								</ul>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Categories End -->
		<!-- Featured Products Start -->
		<div class="section145">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-title-tt">
							<div class="main-title-left">
								<span>Usual Menu</span>
								<h2>いつものメニュー</h2>
							</div>
							<span href="#" class="see-more-btn">See All</span>
						</div>
					</div>
					<div class="col-md-12">
						<div class="owl-carousel featured-slider owl-theme">

							@foreach($usual_menus as $usual_menu)
							<div class="item">
								<div class="product-item">
								{{-- <ul id="accordion" class="product-item accordion"> --}}
									{{-- <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img"> --}}
									<span class="product-img">
										<img src="{{ asset($usual_menu->img) }}" alt="">
										<div class="product-absolute-options">
											{{-- <span class="offer-badge-1">6% off</span> --}}
											{{-- <span class="like-icon" title="wishlist"></span> --}}
										</div>
									</span>
									{{-- </a> --}}
									<div class="product-text-dt">
										{{-- <p>Available<span>(In Stock)</span></p> --}}
										<h4>{{ $usual_menu->name }}</h4>
										{{-- <div class="product-price">$12 <span>$15</span></div> --}}
										{{-- <div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div> --}}
									</div>
								</div>


								{{-- <ul id="accordion" class="accordion"> --}}
								<ul class="accordion">
									<li>
										<div class="link">
											{{-- <i class="fa fa-paint-brush"></i> --}}
											<input class="dish" type="checkbox">
											{{ $usual_menu->name }}
											<i class="fa fa-chevron-down"></i>
										</div>
										<ul class="submenu">
											@foreach($umenu_items as $umenu_item)
											@if ($umenu_item->umenu_id == $usual_menu->id)
											<li>
												{{-- TODO: メニューチェック時にすべてにチェック --}}
												<input class="ingredient" type="checkbox" name="items[]" value='{{ json_encode($umenu_item,JSON_UNESCAPED_UNICODE) }}'>
												{{-- <input type="checkbox" name="items[]" value='{{ $umenu_item }}'> --}}
												<span href="#">{{ $umenu_item->item_name }}</span>
												<span href="#" class="price_right">{{ $umenu_item->item_price }}円</span>
											</li>
											@else
											@endif
											@endforeach
										</ul>
									</li>
								</ul>
							</div>
							@endforeach

							{{-- <div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-2.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">2% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$10 <span>$13</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div> --}}
							{{-- <div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-3.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">5% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$5 <span>$8</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div> --}}
							{{-- <div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-4.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">3% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$15 <span>$20</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div> --}}
							{{-- <div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-5.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">2% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$9 <span>$10</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div> --}}
							{{-- <div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-6.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">2% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$7 <span>$8</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div> --}}
							{{-- <div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-7.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">1% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$6.95 <span>$7</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div> --}}
							{{-- <div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-8.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">3% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$8 <span>$10</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Featured Products End -->
		<!-- Best Values Offers Start -->
		{{-- <div class="section145">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-title-tt">
							<div class="main-title-left">
								<span>Offers</span>
								<h2>Best Values</h2>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<a href="#" class="best-offer-item">
							<img src="{{ asset('/Frontend/images/best-offers/offer-1.jpg') }}" alt="">
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a href="#" class="best-offer-item">
							<img src="{{ asset('/Frontend/images/best-offers/offer-2.jpg') }}" alt="">
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a href="#" class="best-offer-item offr-none">
							<img src="{{ asset('/Frontend/images/best-offers/offer-3.jpg') }}" alt="">
							<div class="cmtk_dt">
								<div class="product_countdown-timer offer-counter-text" data-countdown="2021/01/06"></div>
							</div>
						</a>
					</div>
					<div class="col-md-12">
						<a href="#" class="code-offer-item">
							<img src="{{ asset('/Frontend/images/best-offers/offer-4.jpg') }}" alt="">
						</a>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- Best Values Offers End -->
		<!-- Vegetables and Fruits Start -->
		{{-- <div class="section145">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-title-tt">
							<div class="main-title-left">
								<span>For You</span>
								<h2>Fresh Vegetables & Fruits</h2>
							</div>
							<a href="#" class="see-more-btn">See All</a>
						</div>
					</div>
					<div class="col-md-12">
						<div class="owl-carousel featured-slider owl-theme">
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-11.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">6% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$12 <span>$15</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-12.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">2% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$10 <span>$13</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-13.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">5% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$5 <span>$8</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-1.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">3% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$15 <span>$20</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-5.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">2% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$9 <span>$10</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-6.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">2% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$7 <span>$8</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-14.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">1% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$6.95 <span>$7</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-3.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">3% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$8 <span>$10</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- Vegetables and Fruits Products End -->
		<!-- New Products Start -->
		{{-- <div class="section145">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-title-tt">
							<div class="main-title-left">
								<span>For You</span>
								<h2>Added New Products</h2>
							</div>
							<a href="#" class="see-more-btn">See All</a>
						</div>
					</div>
					<div class="col-md-12">
						<div class="owl-carousel featured-slider owl-theme">
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-10.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">New</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$12 <span>$15</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-9.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">New</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$10</div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-15.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">5% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$5</div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-11.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">New</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$15 <span>$16</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-14.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">New</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$9</div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-2.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">New</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$7</div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-5.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">New</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$6.95</div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="{{ asset('/Frontend/images/product/img-6.jpg') }}" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">New</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Available<span>(In Stock)</span></p>
										<h4>Product Title Here</h4>
										<div class="product-price">$8 <span>8.75</span></div>
										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- New Products End -->
	</div>
	</form>
	<!-- Body End -->


@endsection
