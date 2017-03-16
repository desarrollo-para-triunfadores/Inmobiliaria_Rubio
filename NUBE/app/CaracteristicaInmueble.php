<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaracteristicaAmbiente extends Model
{
    protected $table =  "caracteristicas_inmueble";

    protected $fillable = ['inmueble_id', 'caracteristica_id', 'descripcion'];

    public function inmueble()
    {
        return $this->belongsTo('App\Inmueble');
    }

    public function caracteristica()
    {
        return $this->belongsTo('App\Caracteristica');
    }
}
