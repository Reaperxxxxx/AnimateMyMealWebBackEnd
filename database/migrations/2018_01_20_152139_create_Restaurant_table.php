<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRestaurantTable extends Migration {

	public function up()
	{
		Schema::create('Restaurant', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('id_User')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Restaurant');
	}
}