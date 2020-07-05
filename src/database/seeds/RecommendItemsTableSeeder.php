<?php
use Illuminate\Database\Seeder;
require_once 'Csv2Array.php';

    class RecommendItemsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {

            $csv2Array = new Csv2Array;
            $table =  $csv2Array->convert('database/seeds/recommended_items.csv');

            //Cmd: php artisan db:seed --class="RecommendItemsTableSeeder"

            $faker = Faker\Factory::create("ja_JP");

            for( $i=0; $i<count($table); $i++ ){

                App\RecommendItem::create([
					"pop_img" => $table[$i]['pop_img'],
					"item_id" => $table[$i]['item_id'],
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }
