<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoryTable extends Migration {

	public function up()
	{
		Schema::create('History', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('id_user')->unsigned()->nullable();
			$table->integer('id_restaurant')->unsigned()->nullable();
			$table->integer('id_order')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('History');
	}
}