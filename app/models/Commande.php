<?php

namespace Commande;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Commande extends Eloquent {

	protected $table = 'Commande';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function order()
	{
		return $this->hasOne('Order');
	}

}