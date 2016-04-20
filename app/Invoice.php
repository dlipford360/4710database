<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function Patientvisits()
    {
    	return $this->hasMany('App\Patientvisit'); 
    }

    public function Payments()
    {
    	return $this->hasMany('App\Payment');
    }
}
