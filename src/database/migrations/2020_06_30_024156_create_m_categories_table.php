<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateMCategoriesTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("m_categories", function (Blueprint $table) {
						$table->increments('id');
						$table->string('name');
						$table->string('image');



						// ----------------------------------------------------
						// -- SELECT [m_categories]--
						// ----------------------------------------------------
						// $query = DB::table("m_categories")
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
                    Schema::dropIfExists("m_categories");
                }
            }
        