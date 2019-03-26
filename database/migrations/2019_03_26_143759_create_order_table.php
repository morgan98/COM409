<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('OrderID');
            $table->integer('CustomerID');
            $table->timestamps();
        });
        Schema::table('orders', function ($table) {
            $table->primary(['OrderID', 'CustomerID']);
            $table  ->foreign('CustomerID')
                    ->references('CustomerID')
                    ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
