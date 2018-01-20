<?php

namespace History;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class History extends Eloquent {

	protected $table = 'History';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}