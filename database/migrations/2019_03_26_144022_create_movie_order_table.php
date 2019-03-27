<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_order', function (Blueprint $table) {
            $table->unsignedinteger('OrderID');
            $table->unsignedinteger('CustomerID');
            $table->timestamps();
        });
        Schema::table('movie_order', function($table) {                
            $table->primary(['OrderID','CustomerID']);
            $table->foreign('OrderID')->references('OrderID')->on('orders');             
            $table->foreign('CustomerID')->references('CustomerID')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_order');
    }
}
