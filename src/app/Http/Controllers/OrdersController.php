<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Order;
    
    //=======================================================================
    class OrdersController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\View\View
         */
        public function index(Request $request)
        {
            $keyword = $request->get("search");
            $perPage = 25;
    
            if (!empty($keyword)) {
                
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [orders]--
				// ----------------------------------------------------
				$order = DB::table("orders")
				->leftJoin("users","users.id", "=", "orders.id")
				->leftJoin("m_pick_times","m_pick_times.id", "=", "orders.id")
				->orWhere("orders.subtotal", "LIKE", "%$keyword%")->orWhere("orders.tax", "LIKE", "%$keyword%")->orWhere("orders.discount", "LIKE", "%$keyword%")->orWhere("orders.total", "LIKE", "%$keyword%")->orWhere("orders.paid", "LIKE", "%$keyword%")->orWhere("orders.payment_type", "LIKE", "%$keyword%")->orWhere("orders.status", "LIKE", "%$keyword%")->orWhere("users.name", "LIKE", "%$keyword%")->orWhere("users.email", "LIKE", "%$keyword%")->orWhere("users.password", "LIKE", "%$keyword%")->orWhere("users.phone", "LIKE", "%$keyword%")->orWhere("users.credit_name", "LIKE", "%$keyword%")->orWhere("users.credit_number", "LIKE", "%$keyword%")->orWhere("users.credit_exmonth", "LIKE", "%$keyword%")->orWhere("users.credit_exyear", "LIKE", "%$keyword%")->orWhere("users.credit_cvv", "LIKE", "%$keyword%")->orWhere("m_pick_times.time", "LIKE", "%$keyword%")->select("*")->addSelect("orders.id")->paginate($perPage);
            } else {
                    //$order = Order::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [orders]--
				// ----------------------------------------------------
				$order = DB::table("orders")
				->leftJoin("users","users.id", "=", "orders.id")
				->leftJoin("m_pick_times","m_pick_times.id", "=", "orders.id")
				->select("*")->addSelect("orders.id")->paginate($perPage);              
            }          
            return view("order.index", compact("order"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("order.create");
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function store(Request $request)
        {
            $this->validate($request, [
				"date" => "required|date", //date('date')
				"subtotal" => "nullable|integer", //integer('subtotal')->nullable()
				"tax" => "required|integer", //integer('tax')
				"discount" => "required|integer", //integer('discount')
				"total" => "required|integer", //integer('total')
				"paid" => "required|integer", //integer('paid')
				"payment_type" => "required|integer", //integer('payment_type')
				"status" => "required|integer", //integer('status')
				"receive_time" => "required|date", //dateTime('receive_time')

            ]);
            $requestData = $request->all();
            
            Order::create($requestData);
    
            return redirect("order")->with("flash_message", "order added!");
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\View\View
         */
        public function show($id)
        {
            //$order = Order::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [orders]--
				// ----------------------------------------------------
				$order = DB::table("orders")
				->leftJoin("users","users.id", "=", "orders.id")
				->leftJoin("m_pick_times","m_pick_times.id", "=", "orders.id")
				->select("*")->addSelect("orders.id")->where("orders.id",$id)->first();
            return view("order.show", compact("order"));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\View\View
         */
        public function edit($id)
        {
            $order = Order::findOrFail($id);
    
            return view("order.edit", compact("order"));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  int  $id
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function update(Request $request, $id)
        {
            $this->validate($request, [
				"date" => "required|date", //date('date')
				"subtotal" => "nullable|integer", //integer('subtotal')->nullable()
				"tax" => "required|integer", //integer('tax')
				"discount" => "required|integer", //integer('discount')
				"total" => "required|integer", //integer('total')
				"paid" => "required|integer", //integer('paid')
				"payment_type" => "required|integer", //integer('payment_type')
				"status" => "required|integer", //integer('status')
				"receive_time" => "required|date", //dateTime('receive_time')

            ]);
            $requestData = $request->all();
            
            $order = Order::findOrFail($id);
            $order->update($requestData);
    
            return redirect("order")->with("flash_message", "order updated!");
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function destroy($id)
        {
            Order::destroy($id);
    
            return redirect("order")->with("flash_message", "order deleted!");
        }
    }
    //=======================================================================
    
    