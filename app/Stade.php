<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stade extends Model
{
	
     public function matches(){
        return $this->hasMany('App\Matche');
    }
    public function zones(){
        return $this->hasMany('App\Zone');
    }
}
