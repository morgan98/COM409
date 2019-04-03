<?php

use App\Product;
use App\User;
use App\Rating;
use Illuminate\Database\Seeder;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(App\Product::all() as $product)
        {
            $customer = App\User::inRandomOrder()->first()->CustomerID;
            $numEntries = rand(1,2);
            for($i = 0; $i < $numEntries; $i++)
            {
                $customer2 = App\User::inRandomOrder()->first()->CustomerID;
                while($customer2 == $customer)
                    {                    
                    $customer2 = App\Product::inRandomOrder()->first()->productID;
                    }
                Rating::create([
                    'CustomerID' => $customer2,
                    'productID' => $product->productID,
                    'Rating' => rand(1,5)
                        ]);
                $customer = $customer2;
            }
        }
    }
}
