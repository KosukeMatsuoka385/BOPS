<?php
use Illuminate\Http\Response;

// 追加
use Illuminate\Http\Request;

//default
Route::get("/", function () {
    return view("gambo");
});

Route::get("/laradb", function () {
    return view("welcome");
});

Route::get("/menus", "MenusController@show");

//Demo (Delete after site publish.)
Route::get("/tables_check_view_html",function(){
    return view("tables_check_view_html");
});

//checkout
Route::get("/checkout", "CheckoutController@index");
Route::post("/orderplaced", "CheckoutController@store");


//orderplaced
Route::get("/orderplaced",function(){
    return view("orderplaced");
});

//myorder
Route::get("/myorder",function(){
    return view("myorder");
});


Route::get("/pick_time_table", function () {
    return view("pick_time_table");
});

Route::get("/select_store", function () {
    return view("select_store");

});

//=======================================================================
//index
Route::get("item/", "ItemsController@index");
//create
Route::get("item/create", "ItemsController@create");
//show
Route::get("item/{id}", "ItemsController@show");
//store
Route::post("item/store", "ItemsController@store");
//edit
Route::get("item/{id}/edit", "ItemsController@edit");
//update
Route::put("item/{id}", "ItemsController@update");
//destroy
Route::delete("item/{id}", "ItemsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("user/", "UsersController@index");
//create
Route::get("user/create", "UsersController@create");
//show
Route::get("user/{id}", "UsersController@show");
//store
Route::post("user/store", "UsersController@store");
//edit
Route::get("user/{id}/edit", "UsersController@edit");
//update
Route::put("user/{id}", "UsersController@update");
//destroy
Route::delete("user/{id}", "UsersController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("order/", "OrdersController@index");
//create
Route::get("order/create", "OrdersController@create");
//show
Route::get("order/{id}", "OrdersController@show");
//store
Route::post("order/store", "OrdersController@store");
//edit
Route::get("order/{id}/edit", "OrdersController@edit");
//update
Route::put("order/{id}", "OrdersController@update");
//destroy
Route::delete("order/{id}", "OrdersController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("order_detail/", "OrderDetailsController@index");
//create
Route::get("order_detail/create", "OrderDetailsController@create");
//show
Route::get("order_detail/{id}", "OrderDetailsController@show");
//store
Route::post("order_detail/store", "OrderDetailsController@store");
//edit
Route::get("order_detail/{id}/edit", "OrderDetailsController@edit");
//update
Route::put("order_detail/{id}", "OrderDetailsController@update");
//destroy
Route::delete("order_detail/{id}", "OrderDetailsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("m_categorie/", "MCategoriesController@index");
//create
Route::get("m_categorie/create", "MCategoriesController@create");
//show
Route::get("m_categorie/{id}", "MCategoriesController@show");
//store
Route::post("m_categorie/store", "MCategoriesController@store");
//edit
Route::get("m_categorie/{id}/edit", "MCategoriesController@edit");
//update
Route::put("m_categorie/{id}", "MCategoriesController@update");
//destroy
Route::delete("m_categorie/{id}", "MCategoriesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("m_store/", "MStoresController@index");
//create
Route::get("m_store/create", "MStoresController@create");
//show
Route::get("m_store/{id}", "MStoresController@show");
//store
Route::post("m_store/store", "MStoresController@store");
//edit
Route::get("m_store/{id}/edit", "MStoresController@edit");
//update
Route::put("m_store/{id}", "MStoresController@update");
//destroy
Route::delete("m_store/{id}", "MStoresController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("usual_menu/", "UsualMenusController@index");
//create
Route::get("usual_menu/create", "UsualMenusController@create");
//show
Route::get("usual_menu/{id}", "UsualMenusController@show");
//store
Route::post("usual_menu/store", "UsualMenusController@store");
//edit
Route::get("usual_menu/{id}/edit", "UsualMenusController@edit");
//update
Route::put("usual_menu/{id}", "UsualMenusController@update");
//destroy
Route::delete("usual_menu/{id}", "UsualMenusController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("recommend_item/", "RecommendItemsController@index");
//create
Route::get("recommend_item/create", "RecommendItemsController@create");
//show
Route::get("recommend_item/{id}", "RecommendItemsController@show");
//store
Route::post("recommend_item/store", "RecommendItemsController@store");
//edit
Route::get("recommend_item/{id}/edit", "RecommendItemsController@edit");
//update
Route::put("recommend_item/{id}", "RecommendItemsController@update");
//destroy
Route::delete("recommend_item/{id}", "RecommendItemsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("replace_item/", "ReplaceItemsController@index");
//create
Route::get("replace_item/create", "ReplaceItemsController@create");
//show
Route::get("replace_item/{id}", "ReplaceItemsController@show");
//store
Route::post("replace_item/store", "ReplaceItemsController@store");
//edit
Route::get("replace_item/{id}/edit", "ReplaceItemsController@edit");
//update
Route::put("replace_item/{id}", "ReplaceItemsController@update");
//destroy
Route::delete("replace_item/{id}", "ReplaceItemsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("usual_menu_item/", "UsualMenuItemsController@index");
//create
Route::get("usual_menu_item/create", "UsualMenuItemsController@create");
//show
Route::get("usual_menu_item/{id}", "UsualMenuItemsController@show");
//store
Route::post("usual_menu_item/store", "UsualMenuItemsController@store");
//edit
Route::get("usual_menu_item/{id}/edit", "UsualMenuItemsController@edit");
//update
Route::put("usual_menu_item/{id}", "UsualMenuItemsController@update");
//destroy
Route::delete("usual_menu_item/{id}", "UsualMenuItemsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("m_store_group/", "MStoreGroupsController@index");
//create
Route::get("m_store_group/create", "MStoreGroupsController@create");
//show
Route::get("m_store_group/{id}", "MStoreGroupsController@show");
//store
Route::post("m_store_group/store", "MStoreGroupsController@store");
//edit
Route::get("m_store_group/{id}/edit", "MStoreGroupsController@edit");
//update
Route::put("m_store_group/{id}", "MStoreGroupsController@update");
//destroy
Route::delete("m_store_group/{id}", "MStoreGroupsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("m_pick_time/", "MPickTimesController@index");
//create
Route::get("m_pick_time/create", "MPickTimesController@create");
//show
Route::get("m_pick_time/{id}", "MPickTimesController@show");
//store
Route::post("m_pick_time/store", "MPickTimesController@store");
//edit
Route::get("m_pick_time/{id}/edit", "MPickTimesController@edit");
//update
Route::put("m_pick_time/{id}", "MPickTimesController@update");
//destroy
Route::delete("m_pick_time/{id}", "MPickTimesController@destroy");
//=======================================================================

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
