<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function Patientvisit()
    {
    	return $this->hasMany('App\Patientvisit'); 
    }

    public function Payment()
    {
    	return $this->hasMany('App\Payment');
    }
}
