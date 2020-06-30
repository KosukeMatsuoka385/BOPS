<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateMStoreGroupsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("m_store_groups", function (Blueprint $table) {
						$table->increments('id');
						$table->string('name');



						// ----------------------------------------------------
						// -- SELECT [m_store_groups]--
						// ----------------------------------------------------
						// $query = DB::table("m_store_groups")
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
                    Schema::dropIfExists("m_store_groups");
                }
            }
        