<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function Patientvisit()
    {
    	return $this->belongsTo('App\Patientvisit');
    }
}
