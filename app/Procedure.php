<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    public function Patientvisit()
    {
    	return $this->belongsTo('App\Patientvisit');
    }
}
