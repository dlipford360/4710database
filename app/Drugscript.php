<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drugscript extends Model
{
    public function Patientvisit()
    {
        return $this->belongsTo('App\Patientvisit');
    }
    public function Drug()
    {
        return $this->belongsTo('App\Drug');
    }
}
