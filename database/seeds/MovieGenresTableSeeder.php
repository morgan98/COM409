<?php

use App\MovieGenre;
use Illuminate\Database\Seeder;

class MovieGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MovieGenre::create([
            'productID' => '1',
            'GenreID' => '1',
        ]);
        
        MovieGenre::create([
            'productID' => '1',
            'GenreID' => '8',
        ]);
        
        MovieGenre::create([
            'productID' => '2',
            'GenreID' => '4',
        ]);
        
        MovieGenre::create([
            'productID' => '3',
            'GenreID' => '4',
        ]);
        
        MovieGenre::create([
            'productID' => '4',
            'GenreID' => '4',
        ]);
        
        MovieGenre::create([
            'productID' => '6',
            'GenreID' => '4',
        ]);
        
        MovieGenre::create([
            'productID' => '6',
            'GenreID' => '6',
        ]);
        
        MovieGenre::create([
            'productID' => '7',
            'GenreID' => '4',
        ]);
        
        MovieGenre::create([
            'productID' => '7',
            'GenreID' => '6',
        ]);
        
        MovieGenre::create([
            'productID' => '8',
            'GenreID' => '10',
        ]);
        
        MovieGenre::create([
            'productID' => '8',
            'GenreID' => '8',
        ]);
        
        MovieGenre::create([
            'productID' => '9',
            'GenreID' => '9',
        ]);
        
        MovieGenre::create([
            'productID' => '10',
            'GenreID' => '10',
        ]);
    }
}
