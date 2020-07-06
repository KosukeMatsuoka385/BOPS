<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateOrdersTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("orders", function (Blueprint $table) {
						$table->increments('id')->unsigned();
						$table->integer('user_id')->unsigned();
						$table->date('date');
						$table->integer('subtotal')->nullable();
						$table->integer('tax');
						$table->integer('discount');
						$table->integer('total');
						$table->integer('paid')->unsigned();
						$table->integer('payment_type');
						$table->integer('status');
						$table->string('pick_time');
						$table->integer('store_id')->unsigned();
						$table->timestamps();
						$table->softDeletes();
						//$table->foreign("user_id")->references("id")->on("users");
						//$table->foreign("store_id")->references("id")->on("m_stores");



						// ----------------------------------------------------
						// -- SELECT [orders]--
						// ----------------------------------------------------
						// $query = DB::table("orders")
						// ->leftJoin("users","users.id", "=", "orders.user_id")
						// ->leftJoin("m_stores","m_stores.id", "=", "orders.store_id")
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
                    Schema::dropIfExists("orders");
                }
            }
        