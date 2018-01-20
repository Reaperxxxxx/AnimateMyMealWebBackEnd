<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommandeTable extends Migration {

	public function up()
	{
		Schema::create('Commande', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('id_order')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('Commande');
	}
}