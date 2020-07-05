<?php
use Illuminate\Database\Seeder;
require_once 'Csv2Array.php';

    class MCategoriesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {

            $csv2Array = new Csv2Array;
            $table =  $csv2Array->convert('database/seeds/categories.csv');

            //Cmd: php artisan db:seed --class="MCategoriesTableSeeder"

            $faker = Faker\Factory::create("ja_JP");

            for( $i=0; $i<count($table); $i++ ){

                App\MCategorie::create([
					"name" => $table[$i]['name'],
					"img" => $table[$i]['img']
                ]);
            }
        }
    }
