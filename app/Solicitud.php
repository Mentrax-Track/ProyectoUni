<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\Vehiculo;
use Infraestructura\Accesorio;
use Infraestructura\Mecanico;

class Solicitud extends Model
{
    protected $table = 'solicitudes';
    protected $fillable = ['descripsoli','fecha','chofer','vehiculo_id'];

    public function vehiculo()
    {
        return $this->belongsTo('Infraestructura\Vehiculo');
    }
    public function accesorios()
    {
        return $this->hasMany('Infraestructura\Accesorio');
    }
    public function enviVehi()
    {
        return $this->hasOne('Infraestructura\Vehiculo','id','vehiculo_id');
    }
    public function mecanicos()
    {
        return $this->hasMany('Infraestructura\Mecanico');
    }
}
