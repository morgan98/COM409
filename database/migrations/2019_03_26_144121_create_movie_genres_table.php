<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_genres', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('productID');
            $table->unsignedinteger('GenreID');
            $table->timestamps();
        });
        Schema::table('movie_genres',function ($table) {
            $table->foreign('GenreID')->references('GenreID')->on('genres');
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
        Schema::dropIfExists('movie_genres');
    }
}
