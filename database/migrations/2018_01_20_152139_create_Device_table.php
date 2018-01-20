<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeviceTable extends Migration {

	public function up()
	{
		Schema::create('Device', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('id_restaurant')->unsigned();
			$table->integer('id_employee')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Device');
	}
}