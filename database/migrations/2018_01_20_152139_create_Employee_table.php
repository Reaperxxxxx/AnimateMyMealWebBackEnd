<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeTable extends Migration {

	public function up()
	{
		Schema::create('Employee', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('id_restaurant')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Employee');
	}
}