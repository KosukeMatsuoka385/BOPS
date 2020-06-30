<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateOrderDetailsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("order_details", function (Blueprint $table) {
						$table->increments('id')->unsigned();
						$table->integer('order_id')->unsigned();
						$table->integer('item_id')->unsigned();
						$table->integer('qty');
						$table->timestamps();
						$table->softDeletes();
						//$table->foreign("order_id")->references("id")->on("orders");
						//$table->foreign("item_id")->references("id")->on("items");



						// ----------------------------------------------------
						// -- SELECT [order_details]--
						// ----------------------------------------------------
						// $query = DB::table("order_details")
						// ->leftJoin("orders","orders.id", "=", "order_details.order_id")
						// ->leftJoin("items","items.id", "=", "order_details.item_id")
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
                    Schema::dropIfExists("order_details");
                }
            }
        