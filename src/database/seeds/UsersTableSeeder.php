<?php
use Illuminate\Database\Seeder;
require_once 'Csv2Array.php';

    class UsersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $csv2Array = new Csv2Array;
            $table =  $csv2Array->convert('database/seeds/users.csv');

            //Cmd: php artisan db:seed --class="UsersTableSeeder"

            $faker = Faker\Factory::create("ja_JP");

            for( $i=0; $i<count($table); $i++ ){

                App\User::create([
					"name" => $table[$i]['name'],
					"email" => $table[$i]['email'],
					"password" => $table[$i]['password'],
					"phone" => $table[$i]['phone'],
					"credit_name" => $table[$i]['credit_name'],
					"credit_number" => $table[$i]['credit_number'],
					"credit_exmonth" => $table[$i]['credit_exmonth'],
					"credit_exyear" => $table[$i]['credit_exyear'],
                    "credit_cvv" => $table[$i]['credit_cvv'],
                    "created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
					// "email" => $faker->safeEmail(),
					// "password" => $faker->password(),
					// "phone" => $faker->word(),
					// "credit_name" => $faker->name(),
					// "credit_number" => $faker->randomDigit(),
					// "credit_exmonth" => $faker->randomDigit(),
					// "credit_exyear" => $faker->randomDigit(),
					// "credit_cvv" => $faker->randomDigit(),

                ]);
            }
        }
    }
