<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
// use DB;

use App\User;
use App\Order;
use App\MStore;
use Illuminate\Support\Facades\DB;


class MyOrderController extends Controller
{

    public function index()
    {
        $user_id = Auth::user()->id;
        //usersテーブルからname,phoneを表示
        $user = DB::table('users')
        ->select('name','phone')
        ->where('user_id', '=', $user_id)
        ->get();

        //ordersとm_storesを結合させて表示
        $my_order = DB::table("m_stores")
        ->leftJoin("orders","orders.store_id", "=", "m_stores.id")
        ->selectRaw('orders.pick_time as order_pick_time','m_stores.name as order_store_name','m_stores.tel as order_store_tel','orders.total as order_total')
        ->where('order_id', $order_id)
        ->get();

        return view('myorder',compact('user','my_order'));

    }


}