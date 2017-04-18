<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaracteristicaEdificio extends Model
{
    protected $table = "caracteristica_edificios";

    protected $fillable = ['edificio_id', 'caracteristica_id'];

    public function edificio() {
        return $this->belongsTo('App\Edificio');
    }

    public function caracteristica() {
        return $this->belongsTo('App\Caracteristica');
    }
}
