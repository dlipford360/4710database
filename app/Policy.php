<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    public $table = "policys";
    public function Patient()
    {
    	return $this->hasMany('App\Patient');
    }
}
