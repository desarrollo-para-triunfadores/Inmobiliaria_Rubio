<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    protected $table =  "ambientes";

    protected $fillable = ['nombre', 'superficie', 'descripcion'];

    public function localidad()
    {
        return $this->belongsTo('App\Localidad');
    }
}
