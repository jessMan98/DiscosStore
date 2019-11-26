<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Famoso extends Model
{   
    use SoftDeletes;

    protected $fillable = ['nombre','artistico','nacionalidad'];

    public function discos(){
    	return $this->belongsToMany(Disco::class);
    }

}
