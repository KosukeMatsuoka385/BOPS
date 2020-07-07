<?php
use Illuminate\Database\Seeder;
require_once 'Csv2Array.php';

    class MStoresTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $csv2Array = new Csv2Array;
            $table =  $csv2Array->convert('database/seeds/m_stores.csv');


            //Cmd: php artisan db:seed --class="MStoresTableSeeder"

            $faker = Faker\Factory::create("ja_JP");

            for( $i=0; $i<count($table); $i++ ){

                App\MStore::create([
					"name" => $table[$i]['name'],
                    "store_group_id" => $table[$i]['store_group_id'],
                    "address" => $table[$i]['address'],
                    "tel" => $table[$i]['tel'],
                    "open_time" => $table[$i]['open_time'],
                    "close_time" => $table[$i]['close_time'],
                    "appearance_img" => $table[$i]['appearance_img'],
                    "store_url" => $table[$i]['store_url'],
                    "map_url" => $table[$i]['map_url'],
                ]);
            }
        }
    }
