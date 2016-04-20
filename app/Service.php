<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function Patientvisits()
    {
    	return $this->belongsToMany('App\Patientvisit');
    }
}
