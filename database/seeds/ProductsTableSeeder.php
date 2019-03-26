<?php


use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'productID' => 100001,
            'name' => 'Captain Marvel',
            'slug' => 'captain-marvel',
            'details' => '2019 Film',
            'price' => 1499,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'productID' => 100002,
            'name' => 'Doctor Who: The Macra Terror',
            'slug' => 'dw-macra',
            'details' => '1967 TV Serial',
            'price' => 1499,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'productID' => 100003,
            'name' => 'Doctor Who: Season 18',
            'slug' => 'dw-tbseven',
            'details' => '1980-81 TV Series',
            'price' => 3499,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'productID' => 100004,
            'name' => 'Doctor Who: Series 11',
            'slug' => 'dw-jwone',
            'details' => '2018 TV Series',
            'price' => 3499,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'productID' => 100005,
            'name' => 'Stop making sense',
            'slug' => 'talking-heads',
            'details' => '1984 Film',
            'price' => 699,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'productID' => 100006,
            'name' => 'Alien',
            'slug' => 'alien',
            'details' => '1979 Film',
            'price' => 399,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'productID' => 100007,
            'name' => 'Aliens',
            'slug' => 'aliens',
            'details' => '1986 Film',
            'price' => 399,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'productID' => 100008,
            'name' => 'Spider-Man: Into The Spider-Verse',
            'slug' => 'spider-verse',
            'details' => '2018 Film',
            'price' => 1499,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'productID' => 100009,
            'name' => 'True Stories',
            'slug' => 'true stories',
            'details' => '1986 Film',
            'price' => 1899,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'productID' => 100010,
            'name' => 'Trainspotting',
            'slug' => 'trainspotting',
            'details' => '1996 Film',
            'price' => 299,
            'description' => 'TBA',
            

        ]);
    }
}
