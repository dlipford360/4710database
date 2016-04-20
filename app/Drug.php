<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    public function Drugscripts()
    {
        return $this->hasMany('App\Drugscript');
    }
}
