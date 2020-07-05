<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;

            class CreateUsualMenusTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("usual_menus", function (Blueprint $table) {
						$table->increments('id')->unsigned();
						$table->string('name');
						$table->string('img');
						$table->integer('user_id')->unsigned();
						$table->timestamps();
						$table->softDeletes();
						//$table->foreign("user_id")->references("id")->on("users");



						// ----------------------------------------------------
						// -- SELECT [usual_menus]--
						// ----------------------------------------------------
						// $query = DB::table("usual_menus")
						// ->leftJoin("users","users.id", "=", "usual_menus.user_id")
						// ->get();
						// dd($query); //For checking



                    });
                }

                /**
                 * Reverse the migrations.
                 *
                 * @return void
                 */
                public function down()
                {
                    Schema::dropIfExists("usual_menus");
                }
            }
