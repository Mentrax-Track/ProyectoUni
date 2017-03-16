<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\Solicitud;
use Infraestructura\Vehiculo;

class Peticion extends Model
{
    protected $table = 'peticiones';
    
    protected $fillable = ['solicitud_id','orden','fecha','cantidad','nombre','descripcion','insertador'];

    public function solicitud()
    {
        return $this->belongsTo('Infraestructura\Solicitud');
    }
    public function enviarVehiculo()
    {
        return $this->hasOne('Infraestructura\Vehiculo','id','vehiculo_id');
    }
    public function scopeNumero($query, $numero)
    {
        //dd("scope: ".$chofer_id);
        if(trim($numero) != "")
        {
            $query = $query->where('orden',$numero);
            
        }
      
    }
}

