<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('price');
			$table->integer('discount');
			$table->integer('version');
			$table->integer('year');
			$table->string('SSID');
			$table->string('description');
			$table->integer('category')->unsigned();
			$table->foreign('category')->references('id')->on('categories');
			$table->integer('writer')->unsigned();
			$table->foreign('writer')->references('id')->on('users');
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
        Schema::dropIfExists('books');
    }
}
