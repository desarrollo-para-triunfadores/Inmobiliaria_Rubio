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
        'barrio_id'
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

    public function ambientes() {
        return $this->hasMany('App\Ambiente');
    }
    
     public function fotos() {
        return $this->hasMany('App\imagemInmueble');
    }

}
