<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateMStoresTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("m_stores", function (Blueprint $table) {
						$table->increments('id')->unsigned();
						$table->string('name');
						$table->integer('store_group_id')->unsigned();
						$table->string('address');
						$table->string('tel')->nullable();
						$table->string('open_time')->nullable();
						$table->string('close_time')->nullable();
						$table->string('appearance_img')->nullable();
						$table->string('store_url')->nullable();
						$table->string('map_url')->nullable();
						//$table->foreign("store_group_id")->references("id")->on("m_store_groups");



						// ----------------------------------------------------
						// -- SELECT [m_stores]--
						// ----------------------------------------------------
						// $query = DB::table("m_stores")
						// ->leftJoin("m_store_groups","m_store_groups.id", "=", "m_stores.store_group_id")
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
                    Schema::dropIfExists("m_stores");
                }
            }
        