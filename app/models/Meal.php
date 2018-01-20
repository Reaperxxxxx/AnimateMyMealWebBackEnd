<?php

namespace Meal;

use Eloquent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Meal extends Eloquent {

	protected $table = 'Meal';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function category()
	{
		return $this->belongsTo('Category');
	}

	public function Promotion()
	{
		return $this->belongsTo('Promotion');
	}

}