<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\RecommendItem;
    
    //=======================================================================
    class RecommendItemsController extends Controller
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
				// -- QueryBuilder: SELECT [recommend_items]--
				// ----------------------------------------------------
				$recommend_item = DB::table("recommend_items")
				->leftJoin("items","items.id", "=", "recommend_items.item_id")
				->orWhere("recommend_items.pop_image", "LIKE", "%$keyword%")->orWhere("recommend_items.item_id", "LIKE", "%$keyword%")->orWhere("items.name", "LIKE", "%$keyword%")->orWhere("items.category_id", "LIKE", "%$keyword%")->orWhere("items.cost", "LIKE", "%$keyword%")->orWhere("items.price", "LIKE", "%$keyword%")->orWhere("items.stock", "LIKE", "%$keyword%")->orWhere("items.description", "LIKE", "%$keyword%")->orWhere("items.image", "LIKE", "%$keyword%")->orWhere("items.store_id", "LIKE", "%$keyword%")->orWhere("items.is_addone", "LIKE", "%$keyword%")->select("*")->addSelect("recommend_items.id")->paginate($perPage);
            } else {
                    //$recommend_item = RecommendItem::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [recommend_items]--
				// ----------------------------------------------------
				$recommend_item = DB::table("recommend_items")
				->leftJoin("items","items.id", "=", "recommend_items.item_id")
				->select("*")->addSelect("recommend_items.id")->paginate($perPage);              
            }          
            return view("recommend_item.index", compact("recommend_item"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("recommend_item.create");
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
				"pop_image" => "required", //string('pop_image')
				"item_id" => "required|integer", //integer('item_id')

            ]);
            $requestData = $request->all();
            
            RecommendItem::create($requestData);
    
            return redirect("recommend_item")->with("flash_message", "recommend_item added!");
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
            //$recommend_item = RecommendItem::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [recommend_items]--
				// ----------------------------------------------------
				$recommend_item = DB::table("recommend_items")
				->leftJoin("items","items.id", "=", "recommend_items.item_id")
				->select("*")->addSelect("recommend_items.id")->where("recommend_items.id",$id)->first();
            return view("recommend_item.show", compact("recommend_item"));
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
            $recommend_item = RecommendItem::findOrFail($id);
    
            return view("recommend_item.edit", compact("recommend_item"));
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
				"pop_image" => "required", //string('pop_image')
				"item_id" => "required|integer", //integer('item_id')

            ]);
            $requestData = $request->all();
            
            $recommend_item = RecommendItem::findOrFail($id);
            $recommend_item->update($requestData);
    
            return redirect("recommend_item")->with("flash_message", "recommend_item updated!");
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
            RecommendItem::destroy($id);
    
            return redirect("recommend_item")->with("flash_message", "recommend_item deleted!");
        }
    }
    //=======================================================================
    
    