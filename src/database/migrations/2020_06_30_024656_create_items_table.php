<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateItemsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("items", function (Blueprint $table) {
						$table->increments('id')->unsigned();
						$table->string('name');
						$table->integer('category_id')->unsigned();
						$table->integer('cost');
						$table->integer('price');
						$table->integer('stock');
						$table->string('description');
						$table->string('image');
						$table->integer('store_id')->unsigned();
						$table->integer('is_addone');
						$table->timestamps();
						$table->softDeletes();
						

                    //*********************************
                    // Foreign KEY [ Uncomment if you want to use!! ]
                    //*********************************
                        //$table->foreign("category_id")->references("id")->on("m_categories");
						//$table->foreign("store_id")->references("id")->on("m_stores");



						// ----------------------------------------------------
						// -- SELECT [items]--
						// ----------------------------------------------------
						// $query = DB::table("items")
						// ->leftJoin("m_categories","m_categories.id", "=", "items.category_id")
						// ->leftJoin("m_stores","m_stores.id", "=", "items.store_id")
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
                    Schema::dropIfExists("items");
                }
            }
        