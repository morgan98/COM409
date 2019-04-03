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
            'name' => 'Captain Marvel',
            'slug' => 'captain-marvel',
            'details' => '2019 Film',
            'price' => 14,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'name' => 'Doctor Who: The Macra Terror',
            'slug' => 'dw-macra',
            'details' => '1967 TV Serial',
            'price' => 14,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'name' => 'Doctor Who: Season 18',
            'slug' => 'dw-tbseven',
            'details' => '1980-81 TV Series',
            'price' => 34,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'name' => 'Doctor Who: Series 11',
            'slug' => 'dw-jwone',
            'details' => '2018 TV Series',
            'price' => 34,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'name' => 'Stop making sense',
            'slug' => 'talking-heads',
            'details' => '1984 Film',
            'price' => 6,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'name' => 'Alien',
            'slug' => 'alien',
            'details' => '1979 Film',
            'price' => 3,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'name' => 'Aliens',
            'slug' => 'aliens',
            'details' => '1986 Film',
            'price' => 3,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'name' => 'Spider-Man: Into The Spider-Verse',
            'slug' => 'spider-verse',
            'details' => '2018 Film',
            'price' => 14,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'name' => 'True Stories',
            'slug' => 'true-stories',
            'details' => '1986 Film',
            'price' => 18,
            'description' => 'TBA',
            

        ]);

        Product::create([
            'name' => 'Trainspotting',
            'slug' => 'trainspotting',
            'details' => '1996 Film',
            'price' => 2,
            'description' => 'TBA',
            

        ]);
    }
}
