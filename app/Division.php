<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    //
	protected $fillable = [
		'code',
		'name',
		'address',
		'postcode',
		'city',
		'state',
	];
	
	/**
	* Get all of the members for the division.
	*/
	public function members()
	{
		return $this->hasMany(Member::class);
	}
}
