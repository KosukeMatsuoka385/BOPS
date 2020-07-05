<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;

use App\User;
use App\Order;
use App\OrderDetail;
// use Illuminate\Support\Facades\DB;


class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        //usersテーブルに電話番号、クレカ情報を登録（クレカは余裕があればstripe連携）
        $user = new User; //user特定必要
        // $user->user_id = Auth::user()->id;
        $user->name = 'test30';
        $user->email = 'test30@test.com';
        $user->password = 1234;

        $user->phone = $request->phone;
        $user->credit_name = $request->credit_name;
        $user->credit_number = $request->credit_number;
        $user->credit_exmonth = $request->credit_exmonth;
        $user->credit_exyear = $request->credit_exyear;
        $user->credit_cvv = $request->credit_cvv;
        $user->save();

        
        //ordersテーブルに以下情報を登録
        $order = new Order;
        // $date = new Carbon(Carbon::now());//エラー
        $date = '2020-01-01';
        $store_id = session('store_id',0);
        $subtotal = session('subtotal',0);
        $tax = session('tax',0);
        $discount = session('discount',0);
        $total = session('total',0);
        $paid = session('paid',0);
        $pick_time = session('pick_time','00:00');

        $order->store_id = $store_id;//テーブルにstore_id追加
        $order->date = $date;
        $order->subtotal = $subtotal;
        $order->tax = $tax;
        $order->discount = $discount;
        $order->total = $total;
        $order->paid = $paid;
        $order->payment_type = 1;
        $order->status = 1;
        $order->pick_time = $pick_time;
        $order->save();

        //order_detailsテーブルに以下情報を登録
        $order_detail = new OrderDetail;
        $item_id = session('item_id',0);
        $qty = session('qty',0);

        $order_detail->order_id = $order->id;
        $order_detail->item_id = $item_id;
        $order_detail->qty = $qty;
        $order_detail->save();

        //次の画面であるorderplacedに遷移
        return view('orderplaced');

    }





}

