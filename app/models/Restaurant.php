<?php

namespace Restaurant;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Restaurant extends Eloquent {

	protected $table = 'Restaurant';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function clients()
	{
		return $this->belongsToMany('User\User');
	}

	public function devices()
	{
		return $this->hasMany('Device\Device');
	}

	public function categories()
	{
		return $this->hasMany('Category');
	}

	public function employees()
	{
		return $this->hasMany('Employee');
	}

}