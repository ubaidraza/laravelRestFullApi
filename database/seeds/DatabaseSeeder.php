<?php

use Illuminate\Database\Seeder;

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
        // factory(App\Check::class,20)->create();
        // factory(App\Country::class,5)->create();
        //$this->call(ProductsSeeder::class);
        factory(App\Product::class,100)->create();
        factory(App\Review::class,300)->create();
    }
}
