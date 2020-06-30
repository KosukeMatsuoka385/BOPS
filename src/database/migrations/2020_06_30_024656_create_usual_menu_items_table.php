<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateUsualMenuItemsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("usual_menu_items", function (Blueprint $table) {
						$table->increments('id')->unsigned();
						$table->integer('usual_menu_id')->unsigned();
						$table->integer('item_id')->unsigned();
						$table->timestamps();
						$table->softDeletes();
						//$table->foreign("usual_menu_id")->references("id")->on("usual_menus");
						//$table->foreign("item_id")->references("id")->on("items");



						// ----------------------------------------------------
						// -- SELECT [usual_menu_items]--
						// ----------------------------------------------------
						// $query = DB::table("usual_menu_items")
						// ->leftJoin("usual_menus","usual_menus.id", "=", "usual_menu_items.usual_menu_id")
						// ->leftJoin("items","items.id", "=", "usual_menu_items.item_id")
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
                    Schema::dropIfExists("usual_menu_items");
                }
            }
        