<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\Vehiculo;
use Infraestructura\Solicitud;
use Infraestructura\Devolucion;

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
        if($vehiculo_id != "")
        {
            //dd("scope: ".$vehiculo_id);
            $sol = Solicitud::where('vehiculo_id',$vehiculo_id)->get(['id'])->lists('id')->toArray();
            //dd($sol);
            $query->where('solicitud_id',$sol);  

        }
        
      
    }
    public function devolucion()
    {
        return $this->hasOne('Infraestructura\Devolucion');
    }
}
