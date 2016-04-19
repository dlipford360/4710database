<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedurenote extends Model
{
    public function Procedure()
    {
    	return $this->hasOne('App\Procedure');
    }
}
