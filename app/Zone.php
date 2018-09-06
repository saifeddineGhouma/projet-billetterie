<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
	protected $fillable = [
        'description', 'stade_id','nb_chasser',
    ];
     public function stade()
    {
    	return $this->belongsTo('App\Stade');
    }
}
