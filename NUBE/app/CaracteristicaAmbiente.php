<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaracteristicaAmbiente extends Model
{
    protected $table =  "caracteristicas_ambiente";

    protected $fillable = ['ambiente_id', 'caracteristica_id', 'descripcion'];

    public function ambiente()
    {
        return $this->belongsTo('App\Ambiente');
    }

    public function caracteristica()
    {
        return $this->belongsTo('App\Caracteristica');
    }
}
