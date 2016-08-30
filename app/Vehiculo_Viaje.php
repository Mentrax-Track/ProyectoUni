<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\Viaje;
use Infraestructura\Vehiculo;

class Vehiculo_Viaje extends Model
{
    protected $table = 'vehiculo_viaje';
    
    protected $fillable = ['vehiculo_id','viaje_id'];

    public $timestamps = false;


    public function viaje()
    {
        return $this->belongsTo('Infraestructura\Viaje');
    }
    public function vehiculo()
    {
        return $this->belongsTo('Infraestructura\Vehiculo');
    }

}
