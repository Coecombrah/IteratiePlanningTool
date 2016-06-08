<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public function projects()
    {
    	return $this->belongsToMany('App\user');
    }
}
