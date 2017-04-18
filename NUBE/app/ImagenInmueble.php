<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenInmueble extends Model
{
    protected $table = "imagen_inmuebles";
    
    protected $fillable = ['inmueble_id', 'nombre'];

    public function inmueble() {
        return $this->belongsTo('App\Inmueble');
    }

}
