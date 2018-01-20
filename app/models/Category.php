<?php

namespace Category;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Category extends Eloquent {

	protected $table = 'Category';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function restaurant()
	{
		return $this->belongsTo('Restaurant');
	}

	public function meals()
	{
		return $this->hasMany('Meal');
	}

}