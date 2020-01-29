<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The members that belong to the group.
     */
    public function members()
    {
        return $this->belongsToMany(Member::class);
    }
}
