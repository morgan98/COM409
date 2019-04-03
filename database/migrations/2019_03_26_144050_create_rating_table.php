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
        Schema::create('ratings', function (Blueprint $table) {
            $table->unsignedinteger('productID');
            $table->unsignedinteger('CustomerID');
            $table->tinyinteger('Rating');
            $table->text('Review')->nullable();
            $table->timestamps();
        });
        Schema::table('ratings',function ($table) {
            $table->unique(array('productID','CustomerID'));
            $table->foreign('productID')->references('productID')->on('products');
            $table->foreign('CustomerID')->references('CustomerID')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
