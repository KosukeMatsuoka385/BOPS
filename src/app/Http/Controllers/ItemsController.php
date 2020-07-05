<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Item;

    //=======================================================================
    class ItemsController extends Controller
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
				// -- QueryBuilder: SELECT [items]--
				// ----------------------------------------------------
				$item = DB::table("items")
				->leftJoin("m_categories","m_categories.id", "=", "items.category_id")
				->leftJoin("m_stores","m_stores.id", "=", "items.store_id")
				->orWhere("items.name", "LIKE", "%$keyword%")->orWhere("items.category_id", "LIKE", "%$keyword%")->orWhere("items.cost", "LIKE", "%$keyword%")->orWhere("items.price", "LIKE", "%$keyword%")->orWhere("items.stock", "LIKE", "%$keyword%")->orWhere("items.description", "LIKE", "%$keyword%")->orWhere("items.image", "LIKE", "%$keyword%")->orWhere("items.store_id", "LIKE", "%$keyword%")->orWhere("items.is_addone", "LIKE", "%$keyword%")->orWhere("m_categories.name", "LIKE", "%$keyword%")->orWhere("m_categories.image", "LIKE", "%$keyword%")->orWhere("m_stores.name", "LIKE", "%$keyword%")->orWhere("m_stores.store_group_id", "LIKE", "%$keyword%")->select("*")->addSelect("items.id")->paginate($perPage);
            } else {
                    //$item = Item::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [items]--
				// ----------------------------------------------------
				$item = DB::table("items")
				// ->leftJoin("m_categories","m_categories.id", "=", "items.category_id")
				->leftJoin("m_stores","m_stores.id", "=", "items.store_id")
                ->select("*")->addSelect("items.id")->paginate($perPage);
                ;
            }
            return view("item.index", compact("item"));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("item.create");
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
				"name" => "required", //string('name')
				"category_id" => "required|integer", //integer('category_id')
				"cost" => "required|integer", //integer('cost')
				"price" => "required|integer", //integer('price')
				"stock" => "required|integer", //integer('stock')
				"description" => "required", //string('description')
				"image" => "required", //string('image')
				"store_id" => "required|integer", //integer('store_id')
				"is_addone" => "required|integer", //integer('is_addone')

            ]);
            $requestData = $request->all();

            Item::create($requestData);

            return redirect("item")->with("flash_message", "item added!");
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
            //$item = Item::findOrFail($id);

				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [items]--
				// ----------------------------------------------------
				$item = DB::table("items")
				->leftJoin("m_categories","m_categories.id", "=", "items.category_id")
				->leftJoin("m_stores","m_stores.id", "=", "items.store_id")
				->select("*")->addSelect("items.id")->where("items.id",$id)->first();
            return view("item.show", compact("item"));
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
            $item = Item::findOrFail($id);

            return view("item.edit", compact("item"));
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
				"name" => "required", //string('name')
				"category_id" => "required|integer", //integer('category_id')
				"cost" => "required|integer", //integer('cost')
				"price" => "required|integer", //integer('price')
				"stock" => "required|integer", //integer('stock')
				"description" => "required", //string('description')
				"image" => "required", //string('image')
				"store_id" => "required|integer", //integer('store_id')
				"is_addone" => "required|integer", //integer('is_addone')

            ]);
            $requestData = $request->all();

            $item = Item::findOrFail($id);
            $item->update($requestData);

            return redirect("item")->with("flash_message", "item updated!");
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
            Item::destroy($id);

            return redirect("item")->with("flash_message", "item deleted!");
        }
    }
    //=======================================================================
