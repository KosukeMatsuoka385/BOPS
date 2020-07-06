<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
// use DB;

use App\User;
use Illuminate\Support\Facades\DB;


class OrderPlacedController extends Controller
{

    public function index()
    {
        $user_id = Auth::user()->id;
        //usersテーブルからemailを表示
        $user = DB::table('users');
        $user->select('email')
             ->where('user_id', '=', $user_id)
             ->get();

        return view('orderplaced',compact('user'));

    }


}