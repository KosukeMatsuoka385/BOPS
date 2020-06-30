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
						$table->date('date');
						$table->integer('subtotal')->nullable();
						$table->integer('tax');
						$table->integer('discount');
						$table->integer('total');
						$table->integer('paid')->unsigned();
						$table->integer('payment_type');
						$table->integer('status');
						$table->dateTime('receive_time');
						$table->timestamps();
						$table->softDeletes();
						//$table->foreign("id")->references("id")->on("users");
						//$table->foreign("id")->references("id")->on("m_pick_times");



						// ----------------------------------------------------
						// -- SELECT [orders]--
						// ----------------------------------------------------
						// $query = DB::table("orders")
						// ->leftJoin("users","users.id", "=", "orders.id")
						// ->leftJoin("m_pick_times","m_pick_times.id", "=", "orders.id")
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
        