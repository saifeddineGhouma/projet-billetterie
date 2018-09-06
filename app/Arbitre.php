<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arbitre extends Model
{
    public function matches(){
        return $this->hasMany('App\Matche');
    }
}
