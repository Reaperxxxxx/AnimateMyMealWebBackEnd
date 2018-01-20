<?php

namespace Employee;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Employee extends Eloquent {

	protected $table = 'Employee';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function restaurant()
	{
		return $this->belongsTo('Restaurant');
	}

	public function devices()
	{
		return $this->hasMany('Device');
	}

}