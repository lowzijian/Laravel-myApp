<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
	protected $fillable = [
		'membership_no',
		'nric',
		'name',
		'gender',
		'address',
		'postcode',
		'city',
		'state',
		'phone',
		'division_id',
	];
	
	public function division()
	{
		return $this->belongsTo(Division::class);
	}
	
	/**
	* The groups that belong to the member.
	*/
	public function groups()
	{
		return $this->belongsToMany(Group::class);
	}
}
