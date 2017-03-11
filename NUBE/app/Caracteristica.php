<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table =  "caracteristicas";

    protected $fillable = ['nombre', 'tipo', 'barrio_id', 'descripcion'];
    /* tipo: (ambiente, inmueble, barrio) */


    public function barrio()
    {
        return $this->belongsTo('App\Barrio');
    }
    public function imueble()
    {
        return $this->belongsTo('App\Inmueble');
    }
    public function ambiente()
    {
        return $this->belongsTo('App\Ambiente');
    }

}
