<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateReplaceItemsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("replace_items", function (Blueprint $table) {
						$table->increments('id');
						$table->string('reason');
						$table->integer('product_id1');
						$table->integer('product_id2');
						$table->timestamps();
						$table->softDeletes();



						// ----------------------------------------------------
						// -- SELECT [replace_items]--
						// ----------------------------------------------------
						// $query = DB::table("replace_items")
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
                    Schema::dropIfExists("replace_items");
                }
            }
        