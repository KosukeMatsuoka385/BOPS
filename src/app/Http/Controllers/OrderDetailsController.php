<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\OrderDetail;
    
    //=======================================================================
    class OrderDetailsController extends Controller
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
				// -- QueryBuilder: SELECT [order_details]--
				// ----------------------------------------------------
				$order_detail = DB::table("order_details")
				->leftJoin("orders","orders.id", "=", "order_details.order_id")
				->leftJoin("items","items.id", "=", "order_details.item_id")
				->orWhere("order_details.order_id", "LIKE", "%$keyword%")->orWhere("order_details.item_id", "LIKE", "%$keyword%")->orWhere("order_details.qty", "LIKE", "%$keyword%")->orWhere("orders.subtotal", "LIKE", "%$keyword%")->orWhere("orders.tax", "LIKE", "%$keyword%")->orWhere("orders.discount", "LIKE", "%$keyword%")->orWhere("orders.total", "LIKE", "%$keyword%")->orWhere("orders.paid", "LIKE", "%$keyword%")->orWhere("orders.payment_type", "LIKE", "%$keyword%")->orWhere("orders.status", "LIKE", "%$keyword%")->orWhere("items.name", "LIKE", "%$keyword%")->orWhere("items.category_id", "LIKE", "%$keyword%")->orWhere("items.cost", "LIKE", "%$keyword%")->orWhere("items.price", "LIKE", "%$keyword%")->orWhere("items.stock", "LIKE", "%$keyword%")->orWhere("items.description", "LIKE", "%$keyword%")->orWhere("items.image", "LIKE", "%$keyword%")->orWhere("items.store_id", "LIKE", "%$keyword%")->orWhere("items.is_addone", "LIKE", "%$keyword%")->select("*")->addSelect("order_details.id")->paginate($perPage);
            } else {
                    //$order_detail = OrderDetail::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [order_details]--
				// ----------------------------------------------------
				$order_detail = DB::table("order_details")
				->leftJoin("orders","orders.id", "=", "order_details.order_id")
				->leftJoin("items","items.id", "=", "order_details.item_id")
				->select("*")->addSelect("order_details.id")->paginate($perPage);              
            }          
            return view("order_detail.index", compact("order_detail"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("order_detail.create");
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
				"order_id" => "required|integer", //integer('order_id')
				"item_id" => "required|integer", //integer('item_id')
				"qty" => "required|integer", //integer('qty')

            ]);
            $requestData = $request->all();
            
            OrderDetail::create($requestData);
    
            return redirect("order_detail")->with("flash_message", "order_detail added!");
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
            //$order_detail = OrderDetail::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [order_details]--
				// ----------------------------------------------------
				$order_detail = DB::table("order_details")
				->leftJoin("orders","orders.id", "=", "order_details.order_id")
				->leftJoin("items","items.id", "=", "order_details.item_id")
				->select("*")->addSelect("order_details.id")->where("order_details.id",$id)->first();
            return view("order_detail.show", compact("order_detail"));
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
            $order_detail = OrderDetail::findOrFail($id);
    
            return view("order_detail.edit", compact("order_detail"));
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
				"order_id" => "required|integer", //integer('order_id')
				"item_id" => "required|integer", //integer('item_id')
				"qty" => "required|integer", //integer('qty')

            ]);
            $requestData = $request->all();
            
            $order_detail = OrderDetail::findOrFail($id);
            $order_detail->update($requestData);
    
            return redirect("order_detail")->with("flash_message", "order_detail updated!");
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
            OrderDetail::destroy($id);
    
            return redirect("order_detail")->with("flash_message", "order_detail deleted!");
        }
    }
    //=======================================================================
    
    