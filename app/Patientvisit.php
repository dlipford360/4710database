<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patientvisit extends Model
{
    public function Room()
    {
    	return $this->belongsTo('App\Room');
    }

    public function Patient()
    {
    	return $this->belongsTo('App\Patient'); 
    }

    public function Referral()
    {
    	return $this->belongsTo('App\Referral'); 
    }

    public function Service()
    {
    	return $this->hasMany('App\Service'); 
    }
 
    public function Procedurenote()
    {
    	return $this->hasMany('App\Procedurenote');
    }

    public function Test()
    {
    	return $this->belongsTo('App\Test');
    }
    
    public function Diagnosisnote()
    {
    	return $this->hasMany('App\Diagnosisnote'); 
    }
}
