<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Restaurant', function(Blueprint $table) {
			$table->foreign('id_User')->references('id')->on('User')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Category', function(Blueprint $table) {
			$table->foreign('id_restaurant')->references('id')->on('Restaurant')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Meal', function(Blueprint $table) {
			$table->foreign('promotion')->references('id')->on('Promotion')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('Meal', function(Blueprint $table) {
			$table->foreign('id_category')->references('id')->on('Category')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('Device', function(Blueprint $table) {
			$table->foreign('id_restaurant')->references('id')->on('Restaurant')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('Device', function(Blueprint $table) {
			$table->foreign('id_employee')->references('id')->on('Employee')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('Employee', function(Blueprint $table) {
			$table->foreign('id_restaurant')->references('id')->on('Restaurant')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('Instance_Device', function(Blueprint $table) {
			$table->foreign('id_user')->references('id')->on('User')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('Instance_Device', function(Blueprint $table) {
			$table->foreign('id_device')->references('id')->on('Device')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('Order', function(Blueprint $table) {
			$table->foreign('id_instance')->references('id')->on('Instance_Device')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('Order', function(Blueprint $table) {
			$table->foreign('id_device')->references('id')->on('Device')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('History', function(Blueprint $table) {
			$table->foreign('id_user')->references('id')->on('User')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('History', function(Blueprint $table) {
			$table->foreign('id_restaurant')->references('id')->on('Restaurant')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('History', function(Blueprint $table) {
			$table->foreign('id_order')->references('id')->on('Order')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Commande', function(Blueprint $table) {
			$table->foreign('id_order')->references('id')->on('Order')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Restaurant', function(Blueprint $table) {
			$table->dropForeign('Restaurant_id_User_foreign');
		});
		Schema::table('Category', function(Blueprint $table) {
			$table->dropForeign('Category_id_restaurant_foreign');
		});
		Schema::table('Meal', function(Blueprint $table) {
			$table->dropForeign('Meal_promotion_foreign');
		});
		Schema::table('Meal', function(Blueprint $table) {
			$table->dropForeign('Meal_id_category_foreign');
		});
		Schema::table('Device', function(Blueprint $table) {
			$table->dropForeign('Device_id_restaurant_foreign');
		});
		Schema::table('Device', function(Blueprint $table) {
			$table->dropForeign('Device_id_employee_foreign');
		});
		Schema::table('Employee', function(Blueprint $table) {
			$table->dropForeign('Employee_id_restaurant_foreign');
		});
		Schema::table('Instance_Device', function(Blueprint $table) {
			$table->dropForeign('Instance_Device_id_user_foreign');
		});
		Schema::table('Instance_Device', function(Blueprint $table) {
			$table->dropForeign('Instance_Device_id_device_foreign');
		});
		Schema::table('Order', function(Blueprint $table) {
			$table->dropForeign('Order_id_instance_foreign');
		});
		Schema::table('Order', function(Blueprint $table) {
			$table->dropForeign('Order_id_device_foreign');
		});
		Schema::table('History', function(Blueprint $table) {
			$table->dropForeign('History_id_user_foreign');
		});
		Schema::table('History', function(Blueprint $table) {
			$table->dropForeign('History_id_restaurant_foreign');
		});
		Schema::table('History', function(Blueprint $table) {
			$table->dropForeign('History_id_order_foreign');
		});
		Schema::table('Commande', function(Blueprint $table) {
			$table->dropForeign('Commande_id_order_foreign');
		});
	}
}