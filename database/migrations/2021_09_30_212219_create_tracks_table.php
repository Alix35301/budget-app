<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->datetime("date");
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('product')->unsigned();
            $table->float('qty');
            $table->float('price');
            $table->integer('user_id');
            $table->integer('location');
            $table->integer('shop_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('product')->references('id')->on('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracks');
    }
}
