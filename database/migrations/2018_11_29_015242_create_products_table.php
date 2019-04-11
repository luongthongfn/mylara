<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->string('intro');
            $table->string('content');
            $table->string('image');
            $table->string('keywords');
            $table->string('description');
            $table->integer('price');
            $table->integer('cate_id')->unsigned()->default(1);
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->default(1);;
            $table->foreign('user_id')->references('id')->on('admins')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
