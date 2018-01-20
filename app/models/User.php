<?php

namespace User;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent {

	protected $table = 'User';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function restaurant()
	{
		return $this->hasOne('User\User');
	}

	public function goesToRestaurant()
	{
		return $this->hasMany('User');
	}

}