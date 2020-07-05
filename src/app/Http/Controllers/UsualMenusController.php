<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\UsualMenu;

    //=======================================================================
    class UsualMenusController extends Controller
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
				// -- QueryBuilder: SELECT [usual_menus]--
				// ----------------------------------------------------
				$usual_menu = DB::table("usual_menus")
				->leftJoin("users","users.id", "=", "usual_menus.user_id")
				->orWhere("usual_menus.name", "LIKE", "%$keyword%")->orWhere("usual_menus.image", "LIKE", "%$keyword%")->orWhere("usual_menus.user_id", "LIKE", "%$keyword%")->orWhere("users.name", "LIKE", "%$keyword%")->orWhere("users.email", "LIKE", "%$keyword%")->orWhere("users.password", "LIKE", "%$keyword%")->orWhere("users.phone", "LIKE", "%$keyword%")->orWhere("users.credit_name", "LIKE", "%$keyword%")->orWhere("users.credit_number", "LIKE", "%$keyword%")->orWhere("users.credit_exmonth", "LIKE", "%$keyword%")->orWhere("users.credit_exyear", "LIKE", "%$keyword%")->orWhere("users.credit_cvv", "LIKE", "%$keyword%")->select("*")->addSelect("usual_menus.id")->paginate($perPage);
            } else {
                    //$usual_menu = UsualMenu::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [usual_menus]--
				// ----------------------------------------------------
				$usual_menu = DB::table("usual_menus")
				->leftJoin("users","users.id", "=", "usual_menus.user_id")
				->select("*")->addSelect("usual_menus.id")->paginate($perPage);
            }
            return view("usual_menu.index", compact("usual_menu"));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("usual_menu.create");
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
				"user_id" => "required|integer", //integer('user_id')

            ]);
            $requestData = $request->all();

            UsualMenu::create($requestData);

            return redirect("usual_menu")->with("flash_message", "usual_menu added!");
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
            //$usual_menu = UsualMenu::findOrFail($id);

				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [usual_menus]--
				// ----------------------------------------------------
				$usual_menu = DB::table("usual_menus")
				->leftJoin("users","users.id", "=", "usual_menus.user_id")
				->select("*")->addSelect("usual_menus.id")->where("usual_menus.id",$id)->first();
            return view("usual_menu.show", compact("usual_menu"));
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
            $usual_menu = UsualMenu::findOrFail($id);

            return view("usual_menu.edit", compact("usual_menu"));
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
				"user_id" => "required|integer", //integer('user_id')

            ]);
            $requestData = $request->all();

            $usual_menu = UsualMenu::findOrFail($id);
            $usual_menu->update($requestData);

            return redirect("usual_menu")->with("flash_message", "usual_menu updated!");
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
            UsualMenu::destroy($id);

            return redirect("usual_menu")->with("flash_message", "usual_menu deleted!");
        }
    }
    //=======================================================================
