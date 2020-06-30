<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\MStore;
    
    //=======================================================================
    class MStoresController extends Controller
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
				// -- QueryBuilder: SELECT [m_stores]--
				// ----------------------------------------------------
				$m_store = DB::table("m_stores")
				->leftJoin("m_store_groups","m_store_groups.id", "=", "m_stores.store_group_id")
				->orWhere("m_stores.name", "LIKE", "%$keyword%")->orWhere("m_stores.store_group_id", "LIKE", "%$keyword%")->orWhere("m_store_groups.name", "LIKE", "%$keyword%")->select("*")->addSelect("m_stores.id")->paginate($perPage);
            } else {
                    //$m_store = MStore::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_stores]--
				// ----------------------------------------------------
				$m_store = DB::table("m_stores")
				->leftJoin("m_store_groups","m_store_groups.id", "=", "m_stores.store_group_id")
				->select("*")->addSelect("m_stores.id")->paginate($perPage);              
            }          
            return view("m_store.index", compact("m_store"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("m_store.create");
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
				"store_group_id" => "required|integer", //integer('store_group_id')

            ]);
            $requestData = $request->all();
            
            MStore::create($requestData);
    
            return redirect("m_store")->with("flash_message", "m_store added!");
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
            //$m_store = MStore::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_stores]--
				// ----------------------------------------------------
				$m_store = DB::table("m_stores")
				->leftJoin("m_store_groups","m_store_groups.id", "=", "m_stores.store_group_id")
				->select("*")->addSelect("m_stores.id")->where("m_stores.id",$id)->first();
            return view("m_store.show", compact("m_store"));
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
            $m_store = MStore::findOrFail($id);
    
            return view("m_store.edit", compact("m_store"));
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
				"store_group_id" => "required|integer", //integer('store_group_id')

            ]);
            $requestData = $request->all();
            
            $m_store = MStore::findOrFail($id);
            $m_store->update($requestData);
    
            return redirect("m_store")->with("flash_message", "m_store updated!");
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
            MStore::destroy($id);
    
            return redirect("m_store")->with("flash_message", "m_store deleted!");
        }
    }
    //=======================================================================
    
    