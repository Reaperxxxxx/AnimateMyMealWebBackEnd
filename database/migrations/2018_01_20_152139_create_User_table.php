<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	public function up()
	{
		Schema::create('User', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->enum('role', array('Admin', 'RestaurantAdmin', 'SimpleUser'));
		});
	}

	public function down()
	{
		Schema::drop('User');
	}
}