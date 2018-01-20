<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstanceDeviceTable extends Migration {

	public function up()
	{
		Schema::create('Instance_Device', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('id_user')->unsigned()->nullable();
			$table->integer('id_device')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Instance_Device');
	}
}