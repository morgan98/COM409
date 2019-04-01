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
        $this->call(GenreTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
       // $this->call(MovieGenresTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(RatingTableSeeder::class);
        //$this->call(MovieOrdersTableSeeder::class);
    }
}
