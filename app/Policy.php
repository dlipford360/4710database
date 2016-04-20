<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
 
    public function Patient()
    {
    	return $this->hasMany('App\Patient');
    }
}
