<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealTable extends Migration {

	public function up()
	{
		Schema::create('Meal', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('promotion')->unsigned();
			$table->integer('id_category')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Meal');
	}
}