<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function Patientvisit()
    {
    	return $this->belongsTo('App\Patientvisit');
    }
}
