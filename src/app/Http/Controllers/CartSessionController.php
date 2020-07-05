<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartSessionController extends Controller
{
    public function index(Request $request)
    {
        return view('/cart');
    }

    public function store(Request $request)
    {
        //カートの中身
        $items = $request->items;
        for ($i = 0; $i < count($items); $i++) {
            $arr = json_decode($items[$i], true);
            $request->session()->put('id' . $i, $request->input('name', $arr['item_id']));
            $request->session()->put('name' . $i, $request->input('name', $arr['item_name']));
            $request->session()->put('price' . $i, $request->input('name', $arr['item_price']));
            // $request->session()->put('qty' . $i, $request->input('name', $arr['qty']));
        }
        $count = count($items);//配列の数
        $request->session()->put('count', $count);
        //消費税、合計金額
        for ($i = 0; $i < $count; $i++) {
            $tax = $arr['item_price'] * $count * 0.08;
            $total = $arr['item_price'] * $count * 1.08;
        }

        $request->session()->put('tax', $tax);//消費税
        $request->session()->put('total', $total);//合計金額
        return view('/cart', ['count' => $count]);
    }


    //削除機能は一旦保留
    // public function destroy(Request $request)
    // {
    //     // return session()->all();
    //     // $items = $request->items;
    //     // $data = $request->session()->all()->get();
    //     // return var_dump($data);
    //     // $data = $request->session()->all()->get();
    //     $data = $request->session()->all()->get();
    //     // return var_dump($data);
    //     dd($data);
    //     for($j = 0; $j < count($data); $j++){
    //         $arr = json_decode($data[$j], true);
    //         dd($data);
    //         $request->session()->put('id' . $j, $request->input('name', $arr['item_id']));
    //     }
    //     $request->session()->forget('i');
    //     return view('/cart');
    // }
}
