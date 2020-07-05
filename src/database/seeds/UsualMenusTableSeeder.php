<?php
use Illuminate\Database\Seeder;
require_once 'Csv2Array.php';

    class UsualMenusTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            DB::table('usual_menus')->truncate();

            $csv2Array = new Csv2Array;
            $table =  $csv2Array->convert('database/seeds/usual_menus.csv');

            //Cmd: php artisan db:seed --class="UsualMenusTableSeeder"

            $faker = Faker\Factory::create("ja_JP");

            for( $i=0; $i<count($table); $i++ ){

                App\UsualMenu::create([
					"name" => $table[$i]['name'],
					"img" => $table[$i]['img'],
					"user_id" => $table[$i]['user_id'],
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }
