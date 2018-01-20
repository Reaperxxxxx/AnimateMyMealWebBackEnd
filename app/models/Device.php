<?php

namespace Device;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Device extends Eloquent {

	protected $table = 'Device';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function restaurnat()
	{
		return $this->belongsTo('Restaurant');
	}

	public function employee()
	{
		return $this->belongsTo('Employee');
	}

	public function instances()
	{
		return $this->hasMany('Instance_Device');
	}

}