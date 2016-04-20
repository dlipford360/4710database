<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    public $table = "diagnosiss";

    public function Diagnosisnotes()
    {
        return $this->hasMany('App\Diagnosisnote');
    }
}
