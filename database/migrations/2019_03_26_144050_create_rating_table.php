<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating', function (Blueprint $table) {
            $table->unsignedinteger('productID');
            $table->unsignedinteger('CustomerID');
            $table->tinyinteger('Rating');
            $table->text('Review')->nullable();
            $table->timestamps();
        });
        Schema::table('rating',function ($table) {
            $table->primary(['productID','CustomerID']);
            $table->foreign('productID')->references('productID')->on('products');
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
        Schema::dropIfExists('rating');
    }
}
