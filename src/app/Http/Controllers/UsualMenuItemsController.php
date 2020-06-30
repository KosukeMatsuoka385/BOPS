<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\UsualMenuItem;
    
    //=======================================================================
    class UsualMenuItemsController extends Controller
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
				// -- QueryBuilder: SELECT [usual_menu_items]--
				// ----------------------------------------------------
				$usual_menu_item = DB::table("usual_menu_items")
				->leftJoin("usual_menus","usual_menus.id", "=", "usual_menu_items.usual_menu_id")
				->leftJoin("items","items.id", "=", "usual_menu_items.item_id")
				->orWhere("usual_menu_items.usual_menu_id", "LIKE", "%$keyword%")->orWhere("usual_menu_items.item_id", "LIKE", "%$keyword%")->orWhere("usual_menus.name", "LIKE", "%$keyword%")->orWhere("usual_menus.image", "LIKE", "%$keyword%")->orWhere("usual_menus.user_id", "LIKE", "%$keyword%")->orWhere("items.name", "LIKE", "%$keyword%")->orWhere("items.category_id", "LIKE", "%$keyword%")->orWhere("items.cost", "LIKE", "%$keyword%")->orWhere("items.price", "LIKE", "%$keyword%")->orWhere("items.stock", "LIKE", "%$keyword%")->orWhere("items.description", "LIKE", "%$keyword%")->orWhere("items.image", "LIKE", "%$keyword%")->orWhere("items.store_id", "LIKE", "%$keyword%")->orWhere("items.is_addone", "LIKE", "%$keyword%")->select("*")->addSelect("usual_menu_items.id")->paginate($perPage);
            } else {
                    //$usual_menu_item = UsualMenuItem::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [usual_menu_items]--
				// ----------------------------------------------------
				$usual_menu_item = DB::table("usual_menu_items")
				->leftJoin("usual_menus","usual_menus.id", "=", "usual_menu_items.usual_menu_id")
				->leftJoin("items","items.id", "=", "usual_menu_items.item_id")
				->select("*")->addSelect("usual_menu_items.id")->paginate($perPage);              
            }          
            return view("usual_menu_item.index", compact("usual_menu_item"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("usual_menu_item.create");
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
				"usual_menu_id" => "required|integer", //integer('usual_menu_id')
				"item_id" => "required|integer", //integer('item_id')

            ]);
            $requestData = $request->all();
            
            UsualMenuItem::create($requestData);
    
            return redirect("usual_menu_item")->with("flash_message", "usual_menu_item added!");
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
            //$usual_menu_item = UsualMenuItem::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [usual_menu_items]--
				// ----------------------------------------------------
				$usual_menu_item = DB::table("usual_menu_items")
				->leftJoin("usual_menus","usual_menus.id", "=", "usual_menu_items.usual_menu_id")
				->leftJoin("items","items.id", "=", "usual_menu_items.item_id")
				->select("*")->addSelect("usual_menu_items.id")->where("usual_menu_items.id",$id)->first();
            return view("usual_menu_item.show", compact("usual_menu_item"));
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
            $usual_menu_item = UsualMenuItem::findOrFail($id);
    
            return view("usual_menu_item.edit", compact("usual_menu_item"));
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
				"usual_menu_id" => "required|integer", //integer('usual_menu_id')
				"item_id" => "required|integer", //integer('item_id')

            ]);
            $requestData = $request->all();
            
            $usual_menu_item = UsualMenuItem::findOrFail($id);
            $usual_menu_item->update($requestData);
    
            return redirect("usual_menu_item")->with("flash_message", "usual_menu_item updated!");
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
            UsualMenuItem::destroy($id);
    
            return redirect("usual_menu_item")->with("flash_message", "usual_menu_item deleted!");
        }
    }
    //=======================================================================
    
    