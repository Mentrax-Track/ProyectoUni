<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\Vehiculo;
use Infraestructura\Solicitud;

class Mecanico extends Model
{
    protected $table = 'mecanicos';
    
    protected $fillable = ['fecha','cantidad','unidad','trabajo','marca','codigo','observacion','kilometraje','insertador','solicitud_id'];

    public function enviVehi()
    {
        return $this->hasOne('Infraestructura\Vehiculo','id','vehiculo_id');
    }

    public function solicitud()
    {
        return $this->belongsTo('Infraestructura\Solicitud');
    }
    public function scopeChofer($query, $chofer)
    {
       // dd("scope: ".$chofer);
       if($chofer !=  "")
       {
            $query->where('chofer',$chofer);
       } 
    }
    public function scopeVehiculo_id($query, $vehiculo_id)
    {
       // dd("scope: ".$chofer);
       if($vehiculo_id !=  "")
       {
            $query->where('vehiculo_id',$vehiculo_id);
       } 
    }
}
