<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
  
   protected $fillable = ['imagen','genero','año','album','formato'];
   
   //un disco pertenece a muchos artistas
   public function famosos(){
   	  return $this->belongsToMany(Famoso::class);
   }
    
   //un disco pertenece a una disquera
   public function discografica(){
   	  return $this->belongsTo(Discografica::class);   
   	}

   	public function getGeneroAttribute($value){
   		return ucwords($value);
   	}

   	public function getAlbumAttribute($value){
   		return ucwords($value);
   	}

   	public function getFormatoAttribute($value){
   		return ucwords($value);
   	}
}
