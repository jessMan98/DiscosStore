<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{   
    //campos que seran editables en el modelo.
    protected $fillable = ['genero','año','album','banda','formato'];
}
