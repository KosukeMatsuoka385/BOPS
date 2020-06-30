<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateRecommendItemsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("recommend_items", function (Blueprint $table) {
						$table->increments('id')->unsigned();
						$table->string('pop_image');
						$table->integer('item_id')->unsigned();
						$table->timestamps();
						$table->softDeletes();
						//$table->foreign("item_id")->references("id")->on("items");



						// ----------------------------------------------------
						// -- SELECT [recommend_items]--
						// ----------------------------------------------------
						// $query = DB::table("recommend_items")
						// ->leftJoin("items","items.id", "=", "recommend_items.item_id")
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
                    Schema::dropIfExists("recommend_items");
                }
            }
        