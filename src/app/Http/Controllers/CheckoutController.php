<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;

use App\User;
use App\Order;
use App\OrderDetail;
use App\Item;
// use Illuminate\Support\Facades\DB;


class CheckoutController extends Controller
{

    public function checkout(Request $request)
    {
        $content = new Content;
        //usersテーブルに電話番号を登録
        // DB::table('users')->insert([
        //     'phone' => '1234',
        // ]); 
        
        //ordersテーブルに以下情報を登録
        // DB::table('orders')->insert([
        //     'store_name' => '',
        //     'subtotal' => '',
        //     'tax' => '',
        //     'discount' => '',
        //     'total' => '',
        //     'paid' => '',
        //     'payment_type' => '',
        //     'status' => '注文受付',
        //     'receive_time' => '',
        // ]);

        // //order_detailsテーブルに以下情報を登録
        // DB::table('order_details')->insert([
        //     'item_name' => '',
        //     'price' => '',
        //     'qty' => '',
        // ]);

        $content->save();

        //次の画面であるorderplacedに遷移
        return view('orderplaced');

    }





}

