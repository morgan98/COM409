<?php

use Illuminate\Database\Seeder;

class MovieOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MovieOrder::class, 20)->create();        
    }
}
