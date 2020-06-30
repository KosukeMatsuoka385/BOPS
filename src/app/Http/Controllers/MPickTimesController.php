<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\MPickTime;
    
    //=======================================================================
    class MPickTimesController extends Controller
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
				// -- QueryBuilder: SELECT [m_pick_times]--
				// ----------------------------------------------------
				$m_pick_time = DB::table("m_pick_times")
				->orWhere("m_pick_times.time", "LIKE", "%$keyword%")->select("*")->addSelect("m_pick_times.id")->paginate($perPage);
            } else {
                    //$m_pick_time = MPickTime::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_pick_times]--
				// ----------------------------------------------------
				$m_pick_time = DB::table("m_pick_times")
				->select("*")->addSelect("m_pick_times.id")->paginate($perPage);              
            }          
            return view("m_pick_time.index", compact("m_pick_time"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("m_pick_time.create");
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
				"time" => "required", //time('time')

            ]);
            $requestData = $request->all();
            
            MPickTime::create($requestData);
    
            return redirect("m_pick_time")->with("flash_message", "m_pick_time added!");
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
            //$m_pick_time = MPickTime::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_pick_times]--
				// ----------------------------------------------------
				$m_pick_time = DB::table("m_pick_times")
				->select("*")->addSelect("m_pick_times.id")->where("m_pick_times.id",$id)->first();
            return view("m_pick_time.show", compact("m_pick_time"));
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
            $m_pick_time = MPickTime::findOrFail($id);
    
            return view("m_pick_time.edit", compact("m_pick_time"));
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
				"time" => "required", //time('time')

            ]);
            $requestData = $request->all();
            
            $m_pick_time = MPickTime::findOrFail($id);
            $m_pick_time->update($requestData);
    
            return redirect("m_pick_time")->with("flash_message", "m_pick_time updated!");
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
            MPickTime::destroy($id);
    
            return redirect("m_pick_time")->with("flash_message", "m_pick_time deleted!");
        }
    }
    //=======================================================================
    
    