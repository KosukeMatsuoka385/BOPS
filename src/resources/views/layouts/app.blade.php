<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Example</title>

    <!-- Custome Stylesheets -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <!-- Gambo Stylesheets -->
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('/Frontend/images/fav.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BOPS') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}



    {{-- 既存のGamboより移植 --}}
    <!-- Gambo -->
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
        <main>
            <!-- Category Model Start-->
            <div id="category_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">

                <div class="modal-dialog category-area" role="document">
                    <div class="category-area-inner">
                        <div class="modal-header">
                            <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                                <i class="uil uil-multiply"></i>
                            </button>
                        </div>
                        <div class="category-model-content modal-content">
                            <div class="cate-header">
                                    <h4>カテゴリを選ぶ</h4>
                                </div>
                                <ul class="category-by-cat">
                                    <li>
                                        <a href="#" class="single-cat-item">
                                            <div class="icon">
                                                <img src="{{ asset('/Frontend/images/category/icon-1.svg') }}" alt="">
                                            </div>
                                            <div class="text"> フルーツ、野菜 </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="single-cat-item">
                                            <div class="icon">
                                                <img src="{{ asset('/Frontend/images/category/icon-2.svg') }}" alt="">
                                            </div>
                                            <div class="text"> 日用雑貨品 </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="single-cat-item">
                                            <div class="icon">
                                                <img src="{{ asset('/Frontend/images/category/icon-3.svg') }}" alt="">
                                            </div>
                                            <div class="text"> 日用食料品 </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="single-cat-item">
                                            <div class="icon">
                                                <img src="{{ asset('/Frontend/images/category/icon-4.svg') }}" alt="">
                                            </div>
                                            <div class="text"> 飲料品 </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="single-cat-item">
                                            <div class="icon">
                                                <img src="{{ asset('/Frontend/images/category/icon-5.svg') }}" alt="">
                                            </div>
                                            <div class="text"> お菓子 </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="single-cat-item">
                                            <div class="icon">
                                                <img src="{{ asset('/Frontend/images/category/icon-6.svg') }}" alt="">
                                            </div>
                                            <div class="text"> Home Care </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="single-cat-item">
                                            <div class="icon">
                                                <img src="{{ asset('/Frontend/images/category/icon-7.svg') }}" alt="">
                                            </div>
                                            <div class="text"> 麺類 </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="single-cat-item">
                                            <div class="icon">
                                                <img src="{{ asset('/Frontend/images/category/icon-8.svg') }}" alt="">
                                            </div>
                                            <div class="text"> Personal Care </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="single-cat-item">
                                            <div class="icon">
                                                <img src="{{ asset('/Frontend/images/category/icon-9.svg') }}" alt="">
                                            </div>
                                            <div class="text"> ペット用品 </div>
                                        </a>
                                    </li>
                                </ul>
                                <a href="#" class="morecate-btn"><i class="uil uil-apps"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Category Model End-->
                <!-- Search Model Start-->
                <div id="search_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
                    <div class="modal-dialog search-ground-area" role="document">
                        <div class="category-area-inner">
                            <div class="modal-header">
                                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                                    <i class="uil uil-multiply"></i>
                                </button>
                            </div>
                            <div class="category-model-content modal-content">
                                <div class="search-header">
                                    <form action="#">
                                        <input type="search" placeholder="Search for products...">
                                        <button type="submit"><i class="uil uil-search"></i></button>
                                    </form>
                                </div>
                                <div class="search-by-cat">
                                    <a href="#" class="single-cat">
                                        <div class="icon">
                                            <img src="{{ asset('/Frontend/images/category/icon-1.svg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            果物、野菜
                                        </div>
                                    </a>
                                    <a href="#" class="single-cat">
                                        <div class="icon">
                                            <img src="{{ asset('/Frontend/images/category/icon-2.svg') }}" alt="">
                                        </div>
                                        <div class="text"> 日用雑貨 </div>
                                    </a>
                                    <a href="#" class="single-cat">
                                        <div class="icon">
                                            <img src="{{ asset('/Frontend/images/category/icon-3.svg') }}" alt="">
                                        </div>
                                        <div class="text"> 日用食料品 </div>
                                    </a>
                                    <a href="#" class="single-cat">
                                        <div class="icon">
                                            <img src="{{ asset('/Frontend/images/category/icon-4.svg') }}" alt="">
                                        </div>
                                        <div class="text"> 飲料品 </div>
                                    </a>
                                    <a href="#" class="single-cat">
                                        <div class="icon">
                                            <img src="{{ asset('/Frontend/images/category/icon-5.svg') }}" alt="">
                                        </div>
                                        <div class="text"> お菓子 </div>
                                    </a>
                                    <a href="#" class="single-cat">
                                        <div class="icon">
                                            <img src="{{ asset('/Frontend/images/category/icon-6.svg') }}" alt="">
                                        </div>
                                        <div class="text"> 家庭用品 </div>
                                    </a>
                                    <a href="#" class="single-cat">
                                        <div class="icon">
                                            <img src="{{ asset('/Frontend/images/category/icon-7.svg') }}" alt="">
                                        </div>
                                        <div class="text"> 麺類、ソース類 </div>
                                    </a>
                                    <a href="#" class="single-cat">
                                        <div class="icon">
                                            <img src="{{ asset('/Frontend/images/category/icon-8.svg') }}" alt="">
                                        </div>
                                        <div class="text"> Personal Care </div>
                                    </a>
                                    <a href="#" class="single-cat">
                                        <div class="icon">
                                            <img src="{{ asset('/Frontend/images/category/icon-9.svg') }}" alt="">
                                        </div>
                                        <div class="text"> ペット用品 </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Search Model End-->
                <!-- Cart Sidebar Offset Start-->
                <div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
                    <div class="bs-canvas-header side-cart-header p-3 ">
                        <div class="d-inline-block  main-cart-title">カート <span>(合計アイテム数)</span></div>
                        <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
                    </div>
                    <div class="bs-canvas-body">
                        <div class="cart-top-total">
                            <div class="cart-total-dil">
                                <h4>BOPS Market</h4>
                            <span> 合計金額の数値 </span>
                            </div>
                            {{-- <div class="cart-total-dil pt-2">
                                <h4>Delivery Charges</h4>
                                <span>$1</span>
                            </div> --}}
                        </div>
                        <div class="side-cart-items">
                            <div class="cart-item">
                                <div class="cart-product-img">
                                    <img src="{{ asset('/Frontend/images/product/img-1.jpg') }}" alt="">
                                    <div class="offer-badge">6% OFF</div>
                                </div>
                                <div class="cart-text">
                                    <h4>Product Title Here</h4>
                                    <div class="cart-radio">
                                        <ul class="kggrm-now">
                                            <li>
                                                <input type="radio" id="a1" name="cart1">
                                                <label for="a1">0.50</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="a2" name="cart1">
                                                <label for="a2">1kg</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="a3" name="cart1">
                                                <label for="a3">2kg</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="a4" name="cart1">
                                                <label for="a4">3kg</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="qty-group">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <div class="cart-item-price">$10 <span>$15</span></div>
                                    </div>

                                    <button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
                                </div>
                            </div>
                            <div class="cart-item">
                                <div class="cart-product-img">
                                    <img src="{{ asset('/Frontend/images/product/img-2.jpg') }}" alt="">
                                    <div class="offer-badge">6% OFF</div>
                                </div>
                                <div class="cart-text">
                                    <h4>Product Title Here</h4>
                                    <div class="cart-radio">
                                        <ul class="kggrm-now">
                                            <li>
                                                <input type="radio" id="a5" name="cart2">
                                                <label for="a5">0.50</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="a6" name="cart2">
                                                <label for="a6">1kg</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="a7" name="cart2">
                                                <label for="a7">2kg</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="qty-group">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <div class="cart-item-price">$24 <span>$30</span></div>
                                    </div>
                                    <button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bs-canvas-footer">
                        <div class="cart-total-dil saving-total ">
                            <h4>Total Saving</h4>
                            <span>$11</span>
                        </div>
                        <div class="main-total-cart">
                            <h2>Total</h2>
                            <span>$35</span>
                        </div>
                        <div class="checkout-cart">
                            <a href="#" class="promo-code">Have a promocode?</a>
                            <a href="#" class="cart-checkout-btn hover-btn">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
                <!-- Cart Sidebar Offsetl End-->
                <!-- Header Start -->
                <header class="header clearfix">

                    <div class="sub-header-group">
                        <div class="sub-header">
                            <div class="ui dropdown">
                                <a href="#" class="category_drop hover-btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i><span class="cate__icon">Select Category</span></a>
                            </div>
                            <nav class="navbar navbar-expand-lg navbar-light py-3">
                                <div class="container-fluid">
                                    <button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
                                    <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                                        <ul class="navbar-nav main_nav align-self-stretch">

                                            <li class="nav-item">
                                                <div class="ui icon top left dropdown nav__menu">

                                                    <a class="nav-link" title="Pages">ページ<i class="uil uil-angle-down"></i></a>




                                                    <div class="menu dropdown_page">
                                                        <a href="dashboard_overview.html" class="item channel_item page__links">アカウント</a>
                                                        <a href="about_us.html" class="item channel_item page__links">BOPSについて</a>
                                                        <a href="shop_grid.html" class="item channel_item page__links">Shop Grid</a>
                                                        <a href="single_product_view.html" class="item channel_item page__links">Single Product View</a>
                                                        <a href="checkout.html" class="item channel_item page__links">Checkout</a>
                                                        <a href="request_product.html" class="item channel_item page__links">Product Request</a>
                                                        <a href="order_placed.html" class="item channel_item page__links">Order Placed</a>
                                                        <a href="bill.html" class="item channel_item page__links">Bill Slip</a>
                                                        <a href="sign_in.html" class="item channel_item page__links">Sign In</a>
                                                        <a href="sign_up.html" class="item channel_item page__links">Sign Up</a>
                                                        <a href="forgot_password.html" class="item channel_item page__links">Forgot Password</a>
                                                        <a href="contact_us.html" class="item channel_item page__links">問い合わせる</a>
                                                    </div>
                                                </div>
                                            </li>



                                            <li>
                                                <!-- Authentication Links -->
                                                {{-- ログインしていない場合 --}}
                                                @guest
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                                                    </li>
                                                    @if (Route::has('register'))
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                                                        </li>
                                                    @endif

                                                {{-- ログインしている場合 --}}
                                                @else

                                                    <div class="ui icon top left dropdown nav__menu">

                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }} さん
                                                        </a>
                                                        <div class="menu dropdown_page" aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item item channel_item page__links" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                {{ csrf_field() }}
                                                            </form>
                                                        </div>
                                                    </div>




                                                    {{-- <li class="nav-item dropdown">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }} さん
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>

                                                        </div>
                                                    </li> --}}
                                                @endguest
                                            </li>
                                            {{-- <li>
                                                <!-- Authentication Links -->
                                                <!--ログインしていない場合 -->
                                                @guest
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                                                    </li>
                                                    @if (Route::has('register'))
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                                                        </li>
                                                    @endif
                                                <!-- ログインしている場合 -->
                                                @else
                                                <div class="menu dropdown_page">
                                                <a href="{{ url('logout')}}" class="item channel_item page__links">アカウント</a>
                                                </div>

                                                    <li class="nav-item dropdown">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }} さん
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>

                                                        </div>
                                                    </li>
                                                @endguest
                                            </li> --}}
                                            <li>
                                                <div class="night_mode_switch__btn night_mode_li">
                                                <a href="#" id="night-mode" class="btn-night-mode">
                                                    <div>ダークモード</div>
                                                    <span class="btn-night-mode-switch">
                                                        <span class="uk-switch-button"></span>
                                                    </span>
                                                </a>
                                            </div></li>
                                            <li class="nav-item"><a href="{{url('/')}}" class="nav-link active" title="Home">Home</a></li>
                                            <li class="nav-item"><a href="{{url('select_store') }}" class="nav-link new_item" title="select Store">店舗を選ぶ</a></li>
                                            <li class="nav-item"><a href="shop_grid.html" class="nav-link new_item" title="New Products">新商品</a></li>
                                            <li class="nav-item"><a href="shop_grid.html" class="nav-link" title="Featured Products">イチオシ商品</a></li>
                                            <li class="nav-item">
                                                <div class="ui icon top left dropdown nav__menu">
                                                    <a class="nav-link" title="Pages">ページ<i class="uil uil-angle-down"></i></a>
                                                    <div class="menu dropdown_page">
                                                        <a href="dashboard_overview.html" class="item channel_item page__links">アカウント</a>
                                                        <a href="about_us.html" class="item channel_item page__links">BOPSについて</a>
                                                        <a href="shop_grid.html" class="item channel_item page__links">Shop Grid</a>
                                                        <a href="single_product_view.html" class="item channel_item page__links">Single Product View</a>
                                                        <a href="checkout.html" class="item channel_item page__links">Checkout</a>
                                                        <a href="request_product.html" class="item channel_item page__links">Product Request</a>
                                                        <a href="order_placed.html" class="item channel_item page__links">Order Placed</a>
                                                        <a href="bill.html" class="item channel_item page__links">Bill Slip</a>
                                                        <a href="sign_in.html" class="item channel_item page__links">Sign In</a>
                                                        <a href="sign_up.html" class="item channel_item page__links">Sign Up</a>
                                                        <a href="forgot_password.html" class="item channel_item page__links">Forgot Password</a>
                                                        <a href="contact_us.html" class="item channel_item page__links">問い合わせる</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <div class="ui icon top left dropdown nav__menu">
                                                    <a class="nav-link" title="Blog">ブログ<i class="uil uil-angle-down"></i></a>
                                                    <div class="menu dropdown_page">
                                                        <a href="our_blog.html" class="item channel_item page__links">Our Blog</a>
                                                        <a href="blog_no_sidebar.html" class="item channel_item page__links">Our Blog Two No Sidebar</a>
                                                        <a href="blog_left_sidebar.html" class="item channel_item page__links">Our Blog with Left Sidebar</a>
                                                        <a href="blog_right_sidebar.html" class="item channel_item page__links">Our Blog with Right Sidebar</a>
                                                        <a href="blog_detail_view.html" class="item channel_item page__links">Blog Detail View</a>
                                                        <a href="blog_left_sidebar_single_view.html" class="item channel_item page__links">Blog Detail View with Sidebar</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a href="contact_us.html" class="nav-link" title="Contact">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="header_cart order-1">
                                <a href="#" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart"><i class="uil uil-shopping-cart-alt"></i><span>Cart</span><i class="uil uil-angle-down"></i></a>
                            </div>
                            <div class="search__icon order-1">
                                <a href="#" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model" title="Search"><i class="uil uil-search"></i></a>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Header End -->
            </div>


            {{-- body,html tagをテンプレのapp.blade.phpに記述しているので中身だけ書けば良い  --}}
            <!-- Body Start -->
            <div  style="padding-top: 35px"></div>
            @yield('content')
            <!-- Body End -->


            <div class="content_back_template">
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="footer-first-row">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <ul class="call-email-alt">
                                        <li><a href="#" class="callemail"><i class="uil uil-dialpad-alt"></i>1800-000-000</a></li>
                                        <li><a href="#" class="callemail"><i class="uil uil-envelope-alt"></i>info@gambosupermarket.com</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="social-links-footer">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-second-row">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="second-row-item">
                                        <li class="nav-item text-left footer-li">
                                            <div class="ui icon top left dropdown nav__menu">
                                                <a class="nav-link text-left " title="Blog" style="padding-bottom: 15px"><strong>Categories</strong><i class="uil uil-angle-down"></i></a>
                                                <div class="menu dropdown_page  text-left ">
                                                    <a href="our_blog.html" class="item channel_item page__links text-left ">Fruits and Vegetables</a>
                                                    <a href="blog_no_sidebar.html" class="item channel_item page__links text-left ">Grocery & Staples</a>
                                                    <a href="blog_left_sidebar.html" class="item channel_item page__links text-left ">Dairy & Eggs</a>
                                                    <a href="blog_right_sidebar.html" class="item channel_item page__links text-left ">Beverages</a>
                                                    <a href="blog_detail_view.html" class="item channel_item page__links text-left ">Snacks</a>
                                                    <a href="#" class="item channel_item page__links text-left ">Home Care</a>
                                                    <a href="#" class="item channel_item page__links text-left ">Noodles & Sauces</a>
                                                    <a href="#" class="item channel_item page__links text-left ">Personal Care</a>
                                                    <a href="#" class="item channel_item page__links text-left ">Pet Care</a>
                                                    <a href="#" class="item channel_item page__links text-left ">Meat & Seafood</a>
                                                    <a href="#" class="item channel_item page__links text-left ">Electronics</a>
                                                </div>
                                            </div>
                                        </li>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="second-row-item">
                                        <li class="nav-item text-left footer-li">
                                            <div class="ui icon top left dropdown nav__menu">
                                                <a class="nav-link text-left " title="Blog" style="padding-bottom: 15px"><strong>Useful Links</strong><i class="uil uil-angle-down"></i></a>
                                                <div class="menu dropdown_page">
                                                    <a href="about_us.html" class="item channel_item page__links text-left ">About US</a>
                                                    <a href="shop_grid.html" class="item channel_item page__links text-left ">Featured Products</a>
                                                    <a href="offers.html" class="item channel_item page__links text-left ">Offers</a>
                                                    <a href="our_blog.html" class="item channel_item page__links text-left ">Blog</a>
                                                    <a href="blog_detail_view.html" class="item channel_item page__links text-left ">Faq</a>
                                                    <a href="career.html" class="item channel_item page__links text-left ">Careers</a>
                                                    <a href="contact_us.html" class="item channel_item page__links text-left ">Contact Us</a>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="second-row-item-app">
                                        <h4>Download App</h4>
                                        <ul>
                                            <li><a href="#"><img class="download-btn" src="{{ asset('/Frontend/images/download-1.svg') }}" alt=""></a></li>
                                            <li><a href="#"><img class="download-btn" src="{{ asset('/Frontend/images/download-2.svg') }}" alt=""></a></li>
                                        </ul>
                                    </div>
                                    <div class="second-row-item-payment">
                                        <h4>Payment Method</h4>
                                        <div class="footer-payments">
                                            <ul id="paypal-gateway" class="financial-institutes">
                                                <li class="financial-institutes__logo">
                                                <img alt="Visa" title="Visa" src="{{ asset('/Frontend/images/footer-icons/pyicon-6.svg') }}" >
                                                </li>
                                                <li class="financial-institutes__logo">
                                                <img alt="Visa" title="Visa" src="{{ asset('/Frontend/images/footer-icons/pyicon-1.svg') }}" >
                                                </li>
                                                <li class="financial-institutes__logo">
                                                <img alt="MasterCard" title="MasterCard" src="{{ asset('/Frontend/images/footer-icons/pyicon-2.svg') }}" >
                                                </li>
                                                <li class="financial-institutes__logo">
                                                <img alt="American Express" title="American Express" src="{{ asset('/Frontend/images/footer-icons/pyicon-3.svg') }}" >
                                                </li>
                                                <li class="financial-institutes__logo">
                                                <img alt="Discover" title="Discover" src="{{ asset('/Frontend/images/footer-icons/pyicon-4.svg') }}" >
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="second-row-item-payment">
                                        <h4>Newsletter</h4>
                                        <div class="newsletter-input">
                                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control input-md" required="">
                                            <button class="newsletter-btn hover-btn" type="submit"><i class="uil uil-telegram-alt"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-last-row">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="footer-bottom-links">
                                        <ul>
                                            <li><a href="about_us.html">About</a></li>
                                            <li><a href="contact_us.html">Contact</a></li>
                                            <li><a href="privacy_policy.html">Privacy Policy</a></li>
                                            <li><a href="term_and_conditions.html">Term & Conditions</a></li>
                                            <li><a href="refund_and_return_policy.html">Refund & Return Policy</a></li>
                                        </ul>
                                    </div>
                                    <div class="copyright-text">
                                        <i class="uil uil-copyright"></i>Copyright 2020 <b>Gambolthemes</b> . All rights reserved
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Footer End -->
            </div>
        </main>
    </div>

    <!-- Ganbo Javascripts -->
	<script src="{{ asset('/Frontend/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('/Frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('/Frontend/vendor/OwlCarousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('/Frontend/vendor/semantic/semantic.min.js') }}"></script>
	<script src="{{ asset('/Frontend/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('/Frontend/js/custom.js') }}"></script>
	<script src="{{ asset('/Frontend/js/offset_overlay.js') }}"></script>
    <script src="{{ asset('/Frontend/js/night-mode.js') }}"></script>

    <!-- Custome Stylesheets -->
    <script src="{{ asset('/js/app.js') }}"></script>

    {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
    </nav> --}}
</body>
</html>
