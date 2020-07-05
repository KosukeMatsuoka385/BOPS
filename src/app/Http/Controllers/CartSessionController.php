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
        // $carts = new Cart;
        // $carts->item_id = $request->id;
        // $carts->item_name = $request->item_name;
        // $id = $request->id;
        // return $id;



        $items = $request->items;
        // return $items;
        // return var_dump($items);
        // $items = array_chunk($items, 4);
        // return var_dump($items);
        // $arr = json_encode($items, JSON_UNESCAPED_UNICODE);
        // return $arr;


        for ($i = 0; $i < count($items); $i++) {
            $arr = json_decode($items[$i], true);
            $request->session()->put('name' . $i, $request->input('name', $arr['item_name']));
            $request->session()->put('price' . $i, $request->input('name', $arr['item_price']));
            $request->session()->put('qty' . $i, $request->input('name', $arr['qty']));
        }
        $count = count($items);
        $request->session()->put('count', $count);

        // return var_dump($arr);
        // return session()->all();
        // return $arr['item_name'];
        // return var_dump($arr['item_name']);
        return view('/cart', ['count' => $count]);
    }

    public function destroy(Request $request)
    {
        // return session()->all();
        $request->session()->forget('count');
        return view('/cart', ['count' => $count]);
    }
}
