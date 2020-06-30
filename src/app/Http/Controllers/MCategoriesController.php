<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\MCategorie;
    
    //=======================================================================
    class MCategoriesController extends Controller
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
				// -- QueryBuilder: SELECT [m_categories]--
				// ----------------------------------------------------
				$m_categorie = DB::table("m_categories")
				->orWhere("m_categories.name", "LIKE", "%$keyword%")->orWhere("m_categories.image", "LIKE", "%$keyword%")->select("*")->addSelect("m_categories.id")->paginate($perPage);
            } else {
                    //$m_categorie = MCategorie::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_categories]--
				// ----------------------------------------------------
				$m_categorie = DB::table("m_categories")
				->select("*")->addSelect("m_categories.id")->paginate($perPage);              
            }          
            return view("m_categorie.index", compact("m_categorie"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("m_categorie.create");
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
				"image" => "required", //string('image')

            ]);
            $requestData = $request->all();
            
            MCategorie::create($requestData);
    
            return redirect("m_categorie")->with("flash_message", "m_categorie added!");
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
            //$m_categorie = MCategorie::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_categories]--
				// ----------------------------------------------------
				$m_categorie = DB::table("m_categories")
				->select("*")->addSelect("m_categories.id")->where("m_categories.id",$id)->first();
            return view("m_categorie.show", compact("m_categorie"));
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
            $m_categorie = MCategorie::findOrFail($id);
    
            return view("m_categorie.edit", compact("m_categorie"));
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
				"image" => "required", //string('image')

            ]);
            $requestData = $request->all();
            
            $m_categorie = MCategorie::findOrFail($id);
            $m_categorie->update($requestData);
    
            return redirect("m_categorie")->with("flash_message", "m_categorie updated!");
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
            MCategorie::destroy($id);
    
            return redirect("m_categorie")->with("flash_message", "m_categorie deleted!");
        }
    }
    //=======================================================================
    
    