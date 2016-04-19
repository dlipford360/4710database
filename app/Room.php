<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function Patientvisit()
    {
    	return $this->hasMany('App\Patientvisit');
    }
}
