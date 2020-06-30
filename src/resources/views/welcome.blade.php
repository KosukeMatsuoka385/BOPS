<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>
<script src="/js/jquery.min.js"></script>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<!-- Styles -->
<style>
html, body {
    background-color: #fff;
    color: #64a19d;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    height: 100vh;
    margin: 0;
}
a{
    color:#64a19d;
    font-weight: 600;
}
h4{
    line-height: 2rem;
}
.full-height {
    height: 100vh;
}
.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}
.position-ref {
    position: relative;
}
.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}
.content {
    text-align: center;
}
.title {
    font-size: 84px;
}
.links > a {
    clear: both;
    color: #636b6f;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}
.m-b-md {
    margin-bottom: 100px;
}
ul{
    border: 1px solid #e0e0e0;
    padding: 15px;
    margin: 10px;
    box-shadow: 1px 1px 5px #ccc;
}
li{
    display: inline-block;
    width:150px;
    border-bottom:3px solid #ccc;
    margin: 5px;
    padding:5px;
    list-style: none;
}
li:hover{
    box-shadow: 1px 2px 3px #CCC;
}
</style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
    @endif

    <div class="content">

        <div class="title m-b-md">
            LaravelDB.com
        </div>

        <div class="links">
            <div class="menu">
                <div class="m-b-md">
                    <h4>Example CRUD</h4>
                    <h4>1. Migrtion [ php artisan migrate ]<br>2. Update [ composer update ]<br>3. TestData [ php artisan db:seed ] <br>GO!!</h4>
                    <ul>
                    <li><a href="/tables_check_view_html" target="_blank">[DEMO]Check Table!!</a></li>
								<li><a href="/item">Items</a></li>
								<li><a href="/user">Users</a></li>
								<li><a href="/order">Orders</a></li>
								<li><a href="/order_detail">OrderDetails</a></li>
								<li><a href="/m_categorie">MCategories</a></li>
								<li><a href="/m_store">MStores</a></li>
								<li><a href="/usual_menu">UsualMenus</a></li>
								<li><a href="/recommend_item">RecommendItems</a></li>
								<li><a href="/replace_item">ReplaceItems</a></li>
								<li><a href="/usual_menu_item">UsualMenuItems</a></li>
								<li><a href="/m_store_group">MStoreGroups</a></li>
								<li><a href="/m_pick_time">MPickTimes</a></li>
                        
                    </ul>
                </div>
            </div>

            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
</body>
</html>