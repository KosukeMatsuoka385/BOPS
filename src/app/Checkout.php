<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    //
    protected $users = 'users';
    protected $orders = 'orders';
    protected $order_details = 'order_details';
    protected $items = 'items';

}