<?php

namespace Instance_Device;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Instance_Device extends Eloquent {

	protected $table = 'Instance_Device';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function device()
	{
		return $this->belongsTo('Device');
	}

	public function order()
	{
		return $this->belongsTo('Order');
	}

}