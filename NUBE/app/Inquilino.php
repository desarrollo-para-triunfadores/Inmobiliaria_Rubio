<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Inquilino extends Model
{
    protected $table =  "inquilinos";
    protected $fillable = ['persona_id'];


    public function inmueble()
    {
        return $this->belongsTo('App\Inmueble');
    }

    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }

}
