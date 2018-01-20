<?php

namespace Promotion;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Promotion extends Eloquent {

	protected $table = 'Promotion';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function meals()
	{
		return $this->hasMany('Meal');
	}

}