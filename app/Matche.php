<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Equipe;

class Matche extends Model
{


    protected $fillable = [
        'dateMatche', 'equipe_A_id','equipe_B_id','stade_id','type','Nb_supporteur','heureMatche',
    ];
    
     public function equipe()
    {
        return $this->belongsTo('App\Equipe','equipe_A_id');
    }
      public function equipeB()
    {
        return $this->belongsTo('App\Equipe','equipe_B_id');
    }
     public function stade()
    {
    	return $this->belongsTo('App\Stade');
    }
     public function arbitre()
    {
    	return $this->belongsTo('App\Arbitre');
    }
}
