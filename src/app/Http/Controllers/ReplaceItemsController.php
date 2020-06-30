<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\ReplaceItem;
    
    //=======================================================================
    class ReplaceItemsController extends Controller
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
				// -- QueryBuilder: SELECT [replace_items]--
				// ----------------------------------------------------
				$replace_item = DB::table("replace_items")
				->orWhere("replace_items.reason", "LIKE", "%$keyword%")->orWhere("replace_items.product_id1", "LIKE", "%$keyword%")->orWhere("replace_items.product_id2", "LIKE", "%$keyword%")->select("*")->addSelect("replace_items.id")->paginate($perPage);
            } else {
                    //$replace_item = ReplaceItem::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [replace_items]--
				// ----------------------------------------------------
				$replace_item = DB::table("replace_items")
				->select("*")->addSelect("replace_items.id")->paginate($perPage);              
            }          
            return view("replace_item.index", compact("replace_item"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("replace_item.create");
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
				"reason" => "required", //string('reason')
				"product_id1" => "required|integer", //integer('product_id1')
				"product_id2" => "required|integer", //integer('product_id2')

            ]);
            $requestData = $request->all();
            
            ReplaceItem::create($requestData);
    
            return redirect("replace_item")->with("flash_message", "replace_item added!");
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
            //$replace_item = ReplaceItem::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [replace_items]--
				// ----------------------------------------------------
				$replace_item = DB::table("replace_items")
				->select("*")->addSelect("replace_items.id")->where("replace_items.id",$id)->first();
            return view("replace_item.show", compact("replace_item"));
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
            $replace_item = ReplaceItem::findOrFail($id);
    
            return view("replace_item.edit", compact("replace_item"));
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
				"reason" => "required", //string('reason')
				"product_id1" => "required|integer", //integer('product_id1')
				"product_id2" => "required|integer", //integer('product_id2')

            ]);
            $requestData = $request->all();
            
            $replace_item = ReplaceItem::findOrFail($id);
            $replace_item->update($requestData);
    
            return redirect("replace_item")->with("flash_message", "replace_item updated!");
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
            ReplaceItem::destroy($id);
    
            return redirect("replace_item")->with("flash_message", "replace_item deleted!");
        }
    }
    //=======================================================================
    
    