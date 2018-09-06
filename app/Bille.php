<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bille extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function matche()
    {
    	return $this->belongsTo('App\Matche');
    }
}
