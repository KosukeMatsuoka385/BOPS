<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\MStoreGroup;
    
    //=======================================================================
    class MStoreGroupsController extends Controller
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
				// -- QueryBuilder: SELECT [m_store_groups]--
				// ----------------------------------------------------
				$m_store_group = DB::table("m_store_groups")
				->orWhere("m_store_groups.name", "LIKE", "%$keyword%")->select("*")->addSelect("m_store_groups.id")->paginate($perPage);
            } else {
                    //$m_store_group = MStoreGroup::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_store_groups]--
				// ----------------------------------------------------
				$m_store_group = DB::table("m_store_groups")
				->select("*")->addSelect("m_store_groups.id")->paginate($perPage);              
            }          
            return view("m_store_group.index", compact("m_store_group"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("m_store_group.create");
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

            ]);
            $requestData = $request->all();
            
            MStoreGroup::create($requestData);
    
            return redirect("m_store_group")->with("flash_message", "m_store_group added!");
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
            //$m_store_group = MStoreGroup::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_store_groups]--
				// ----------------------------------------------------
				$m_store_group = DB::table("m_store_groups")
				->select("*")->addSelect("m_store_groups.id")->where("m_store_groups.id",$id)->first();
            return view("m_store_group.show", compact("m_store_group"));
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
            $m_store_group = MStoreGroup::findOrFail($id);
    
            return view("m_store_group.edit", compact("m_store_group"));
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

            ]);
            $requestData = $request->all();
            
            $m_store_group = MStoreGroup::findOrFail($id);
            $m_store_group->update($requestData);
    
            return redirect("m_store_group")->with("flash_message", "m_store_group updated!");
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
            MStoreGroup::destroy($id);
    
            return redirect("m_store_group")->with("flash_message", "m_store_group deleted!");
        }
    }
    //=======================================================================
    
    