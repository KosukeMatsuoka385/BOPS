<?php
use Illuminate\Database\Seeder;
require_once 'Csv2Array.php';

    class ItemsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
		public function run()
        {
            DB::table('items')->truncate();

            $csv2Array = new Csv2Array;
            $table =  $csv2Array->convert('database/seeds/items.csv');

            //Cmd: php artisan db:seed --class="UsualMenusTableSeeder"

            $faker = Faker\Factory::create("ja_JP");

            for( $i=0; $i<count($table); $i++ ){

                App\Item::create([
					"name" => $table[$i]['name'],
					"category_id" => $table[$i]['category_id'],
					"cost" => $table[$i]['cost'],
					"price" => $table[$i]['price'],
					"stock" => $table[$i]['stock'],
					"description" => $table[$i]['description'],
					"img" => $table[$i]['img'],
					"store_id" => $table[$i]['store_id'],
					"is_addone" => $table[$i]['is_addone'],
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }
