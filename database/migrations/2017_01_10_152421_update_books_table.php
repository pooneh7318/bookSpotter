<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
			$table->string('title');
			$table->integer('discount')->nullable()->change();
			$table->integer('version')->nullable()->change();
			$table->integer('year')->nullable()->change();
			$table->string('SSID')->nullable()->change();
			$table->string('description')->nullable()->change();
			$table->integer('category')->unsigned()->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
    }
}