<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_genre', function (Blueprint $table) {
            $table->unsignedinteger('productID');
            $table->unsignedinteger('GenreID');
            $table->timestamps();
        });
        Schema::table('movie_genre',function ($table) {
            $table->primary(['productID','GenreID']);
            $table->foreign('GenreID')->references('GenreID')->on('genre');
            $table->foreign('productID')->references('productID')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_genre');
    }
}
