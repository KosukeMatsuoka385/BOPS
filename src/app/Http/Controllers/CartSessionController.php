<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Cart;

class CartSessionController extends Controller
{
    public function index(Request $request)
    {
        return view('/cart');
    }

    public function store(Request $request)
    {

        // return session()->all();


        //カートの中身
        $items = $request->items;
        // dd($items);


        for ($i = 0; $i < count($items); $i++) {
            $arr = json_decode($items[$i], true);
            $request->session()->put('id' . $i, $request->input('name', $arr['item_id']));
            $request->session()->put('name' . $i, $request->input('name', $arr['item_name']));
            $request->session()->put('price' . $i, $request->input('name', $arr['item_price']));
            $request->session()->put('qty' . $i, $request->input('name', $arr['qty']));
        }
        //消費税、合計金額
        $subtotal = 0;
        for ($i = 0; $i < count($items); $i++) {
            $price = session('price'.$i);
            $qty = session('qty'.$i);
            $subtotal += $price * $qty;
            $tax = floor($subtotal * 0.08);
            $total = $subtotal + $tax;
        }

        $count = count($items);//配列の数
        $request->session()->put('count', $count);//品数
        $request->session()->put('subtotal', $subtotal);//小計
        $request->session()->put('tax', $tax);//消費税
        $request->session()->put('total', $total);//合計金額
        return view('/cart', ['count' => $count, 'subtotal' => $subtotal, 'tax' => $tax, 'total' => $total]);
    }

    

    public function update(Request $request)
    {        
        // $items = $request->items;
        // $data = $request->session()->all()->get();
        // return var_dump($data);

        // dd($data);
        // $items = $request->items;
        // $count = count($items);//配列の数
        // $request->session()->put('count', $count);

        // $items = $request->items;
        // $count = count($items);//配列の数
        // $request->session()->put('count', $count);
        // $num = $request->num;
        // dd($num);

        // $items = $request->items;
        // for ($i = 0; $i < count($items); $i++) {
        //     $arr = json_decode($items[$i], true);
        //     $request->session()->put('qty' . $i, $request->input('name', $arr['qty']));
        // }
        // // dd($arr['qty']);
        // $id = $arr['item_price'].$i;
        // dd($id);
        return view('/cart', ['count' => $count]);
        
    }




    //削除機能は一旦保留
    public function destroy(Request $request)
    {
        
        // $items = $request->items;
        $items = session()->all();
        dd($items);


        for ($i = 0; $i < count($items); $i++) {
            $arr = json_decode($items[$i], true);
            $request->session()->put('id' . $i, $request->input('name', $arr['item_id']));
            $request->session()->put('name' . $i, $request->input('name', $arr['item_name']));
            $request->session()->put('price' . $i, $request->input('name', $arr['item_price']));
            $request->session()->put('qty' . $i, $request->input('name', $arr['qty']));
        }




        $items = session('name0');
        dd($items);
        // return session()->all();
        return session()->all();
        
        dd($items);
        // $items = $request->items;


        dd($items);
        // for($j = 0; $j < count($data); $j++){
        //     $arr = json_decode($data[$j], true);
        //     dd($data);
        //     $request->session()->put('id' . $j, $request->input('name', $arr['item_id']));
        // }
        $request->session()->forget('index');
        return view('/cart');
    }
}