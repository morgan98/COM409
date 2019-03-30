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
        Schema::create('movie_orders', function (Blueprint $table) {
            $table->increments('MovieOrderID');
            $table->unsignedinteger('OrderID');
            $table->unsignedinteger('productID');
            $table->timestamps();
        });
        Schema::table('movie_orders', function($table) {      
            $table->unique(array('MovieOrderID','OrderID','productID'));
            $table->foreign('OrderID')->references('OrderID')->on('orders');             
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
        Schema::dropIfExists('movie_orders');
    }
}
