<?php

use Illuminate\Database\Seeder;;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(UsualMenusTableSeeder::class);
        $this->call(UsualMenuItemsTableSeeder::class);
        $this->call(MCategoriesTableSeeder::class);
        $this->call(RecommendItemsTableSeeder::class);
        $this->call(MStoresTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
