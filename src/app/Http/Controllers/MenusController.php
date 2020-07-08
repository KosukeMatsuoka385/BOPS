<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Item;
use Auth;

class MenusController extends Controller
{
    public function show(Request $request)
    {

        // $user_id = Auth::user()->id;
        $user_id = 1;
        // $store_id = session('store_id',1);
        $store_id = 1;

        $usual_menus = DB::table("usual_menus")
        ->select('id','name','img')
        ->where('user_id', '=', $user_id)
        // ->where('user_id', '=', 1)
        // こちらも本当は $store_id で絞らないとイケない
        ->get();

        $umenu_items = DB::table("usual_menu_items as umenu_items")
        ->leftJoin("usual_menus as umenus","umenus.id", "=", "umenu_items.usual_menu_id")
        ->leftJoin("items as items","items.id", "=", "umenu_items.item_id")
        // ->select('items.id as item_id','items.name as item_name','items.price as item_price','1 as qty','umenus.id as umenu_id','umenus.name as umenu_name','items.store_id as store_id')
        ->selectRaw('items.id as item_id, items.name as item_name, items.price as item_price, 1 as qty, umenus.id as umenu_id, umenus.name as umenu_name, items.store_id as store_id')
        ->where('store_id', $store_id)
        ->get();

        $categories = DB::table("m_categories")
        ->select('id','name','img')
        ->get();

        $category_items = DB::table("items")
        // ->select('id as item_id','name as item_name','price as item_price','category_id')
        ->selectRaw('id as item_id, name as item_name, price as item_price, 1 as qty, category_id')
        ->where('store_id', $store_id)
        ->get();

        $recommend_items = DB::table("recommend_items as ritems")
        ->leftJoin("items","items.id", "=", "ritems.item_id")
        // ->select('items.id as item_id','items.name as item_name','items.price as item_price','ritems.pop_img as pop_img','items.store_id as store_id')
        ->selectRaw('items.id as item_id, items.name as item_name, items.price as item_price, 1 as qty, ritems.pop_img as pop_img, items.store_id as store_id')
        ->where('store_id', $store_id)
        ->get();

        return view("menus", compact("usual_menus","umenu_items","categories","category_items","recommend_items"));
    }


    // public function register(Request $request) {

    //     $total = session('total', '-1');

    //     $orders = new Order;
    //     $orders->total = $total;
    //     $orders->tax = $request->tax;
    //     $order->save();

    //     // $orders = new Order;
    //     // $orders->total = $total;
    //     // $order->save();
    // }
}
