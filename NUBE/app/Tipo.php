<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Tipo extends Model
{
    protected $table =  "tipos";
    protected $fillable = ['nombre','descripcion'];


    public function caracteristicas()
    {
        return $this->hasMany('App\Caracteristica');
    }


    public function scopeSearchValidos($query)
    {
        return $query->where('id',  '>', 1);
    }

}
