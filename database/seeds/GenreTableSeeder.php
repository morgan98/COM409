<?php

use App\Genre;
use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'GenreSlug' => 'action-adventure',
            'GenreName' => 'Action / Adventure',
            'GenreDescription' => 'Action Adventure movies often involve lots of action, explosions and a mission/goal to accomplish'
        ]);
        
        Genre::create([
            'GenreSlug' => 'rom-com',
            'GenreName' => 'Romantic Comedy',
            'GenreDescription' => 'Love stories that often contain a lot of humour'
        ]);
        
        Genre::create([
            'GenreSlug' => 'fantasy',
            'GenreName' => 'Fantasy',
            'GenreDescription' => 'Fantasy movies tell stories that often take place in fictional worlds involving magic and/or mystical creatures'
        ]);
        
        Genre::create([
            'GenreSlug' => 'sci-fi',
            'GenreName' => 'Science Fiction',
            'GenreDescription' => 'Science Fiction often portrays movies that take place in the short or distant future. Time-travel, Space Exploration, Robots, Cyberpunk, etc'
        ]);
        
        Genre::create([
            'GenreSlug' => 'mystery',
            'GenreName' => 'Mystery',
            'GenreDescription' => 'Mystery movies often involve stories that engage the audience to use their mind and try to work out what is happening in the story before the reveal. Often Murder Mysteries.'
        ]);
        
        Genre::create([
            'GenreSlug' => 'horror-thriller',
            'GenreName' => 'Horror / Thriller',
            'GenreDescription' => 'Horror movies are designed to scare, Thriller movies often include suspense and excitement. There is often a lot of overlap in the theme'
        ]);
        
        Genre::create([
            'GenreSlug' => 'superhero',
            'GenreName' => 'Super Hero',
            'GenreDescription' => 'Movies often involve the protagonist receiving super human abilities and using it to become a hero'
        ]);
        
        Genre::create([
            'GenreSlug' => 'informative',
            'GenreName' => 'Informative',
            'GenreDescription' => 'Often done in a documentary style, Movies focused more on informing the audience on their subject'
        ]);
        
        Genre::create([
            'GenreSlug' => 'animation',
            'GenreName' => 'Animation / 3D Animation',
            'GenreDescription' => 'Animated movies include 2d styles such as cartoons, Japanese anime. 3D is often Computer Generated but includes still motion / claymation'
        ]);
        
        Genre::create([
            'GenreSlug' => 'comedy',
            'GenreName' => 'Comedy',
            'GenreDescription' => 'Comedies are movies that are designed to get a laugh out of the audience.'
        ]);
    }
}
