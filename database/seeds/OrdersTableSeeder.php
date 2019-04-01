<?php

use App\MovieOrder;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Order::class, 20)->create();
        
        foreach(App\Order::all() as $order)
        {
            $product = App\Product::inRandomOrder()->first()->productID;
            $numEntries = rand(1,2);
            for($i = 0; $i < $numEntries; $i++)
            {
                $product2 = App\Product::inRandomOrder()->first()->productID;
                while($product2 == $product)
                    {                    
                    $product2 = App\Product::inRandomOrder()->first()->productID;
                    }
                MovieOrder::create([
                    'productID' => $product2,
                    'OrderID' => $order->OrderID
                        ]);
                $product = $product2;
            }
        }
    }
}
