<?php

use Faker\Generator as Faker;

$factory->define(App\MovieOrder::class, function (Faker $faker) {    
    return [
        'OrderID' => App\Order::pluck('OrderID')->random(),
        'productID' => App\Product::pluck('productID')->first(),
    ];
});
