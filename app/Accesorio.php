<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\Solicitud;

class Accesorio extends Model
{
    protected $table = 'accesorios';
    protected $fillable = ['solicitud','solicitud_id'];

    public function solicitud()
    {
        return $this->belongsTo('Infraestructura\Solicitud');
    }
}
