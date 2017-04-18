<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model {

    protected $table = "inmuebles";
    protected $fillable = [
        'condicion',
        'valorVenta',
        'valorAlquiler',
        'superficie',
        'direccion',
        'piso',
        'numDepto',
        'fechaHabilitacion',
        'fechaFinContrato',
        'linkVideo',
        'expensaValor',
        'expensaDescripcion',
        'longitud',
        'latitud',
        'cantidadAmbientes',
        'disponible',
        'descripcion',
        'tipo_id',
        'garante_id',
        'inquilino_id',
        'propietario_id',
        'barrio_id',
        'edificio_id'
    ];

    public function garante() {
        return $this->belongsTo('App\Garante');
    }

    public function tipo() {
        return $this->belongsTo('App\Tipo');
    }

    public function inquilino() {
        return $this->belongsTo('App\Inquilino');
    }

    public function barrio() {
        return $this->belongsTo('App\Barrio');
    }

    public function propietario() {
        return $this->belongsTo('App\Propietario');
    }
    
      public function edificio() {
        return $this->belongsTo('App\Edificio');
    }

    public function fotos() {
        return $this->hasMany('App\ImagemInmueble');
    }
    
     public function caracteristicas() {
        return $this->hasMany('App\CaracteristicaInmueble');
    }

}
