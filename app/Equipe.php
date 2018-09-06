<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
	protected $fillable = [
        'nom', 'description',
    ];
     public function matches(){
        return $this->hasMany('App\Matche');
    }
}
