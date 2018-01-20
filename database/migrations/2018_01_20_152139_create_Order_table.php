<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	public function up()
	{
		Schema::create('Order', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('id_instance')->unsigned()->nullable();
			$table->integer('id_device')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Order');
	}
}