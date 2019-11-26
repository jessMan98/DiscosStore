<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discografica extends Model
{
    
    protected $fillable = ['nDisquera'];

    public function discos(){
    	
    	return $this->hasMany(Disco::class,'discografica_id');
    }
}
