<?php

namespace Order;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Order extends Eloquent {

	protected $table = 'Order';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function instances()
	{
		return $this->hasMany('Instance_Device');
	}

	public function commande()
	{
		return $this->belongsTo('Commande');
	}

}