<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function policy()
    {
    	return $this->belongsTo('App\Policy');
    }

    public function Patientvisits()
    {
    	return $this->hasMany('App\Patientvisit');
    }
}
