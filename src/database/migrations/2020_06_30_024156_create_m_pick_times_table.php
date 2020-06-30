<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateMPickTimesTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("m_pick_times", function (Blueprint $table) {
						$table->increments('id');
						$table->time('time');



						// ----------------------------------------------------
						// -- SELECT [m_pick_times]--
						// ----------------------------------------------------
						// $query = DB::table("m_pick_times")
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
                    Schema::dropIfExists("m_pick_times");
                }
            }
        