<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosisnote extends Model
{
    public function Patientvisit()
    {
    	return $this->belongsTo('App\Patientvisit');
    }

    public function Diagnosis()
    {
    	return $this->belongsTo('App\Diagnosis');
    }
}
