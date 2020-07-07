<?php
use Illuminate\Database\Seeder;
require_once 'Csv2Array.php';

    class UsualMenuItemsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $csv2Array = new Csv2Array;
            $table =  $csv2Array->convert('database/seeds/usual_menu_items.csv');

            //Cmd: php artisan db:seed --class="UsualMenuItemsTableSeeder"

            $faker = Faker\Factory::create("ja_JP");

            for( $i=0; $i<count($table); $i++ ){

                App\UsualMenuItem::create([
					"usual_menu_id" => $table[$i]['usual_menu_id'],
					"item_id" => $table[$i]['item_id'],
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }
