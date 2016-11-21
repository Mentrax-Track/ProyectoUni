<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\Vehiculo;
use Infraestructura\User;

class InformeViaje extends Model
{
    protected $table = 'informesviajes';
    
    protected $fillable = ['viaje_id','vehiculo','chofer','encargado','entidad',
                'fechapartida','kilopartida','tiempopartida','fechallegada','kilollegada',
                'tiempollegada','viaticoa','viaticob','viaticoc','pasajeros','kmtotal','dias','recargue1',
                'compra1','recargue2','compra2','recargue3','compra3','descripe','montope',
                'montoim','totalpeim','delegacion','recomendacion','descripmante','combustotalu','combustotalco'];

    public function enviVehi()
    {
        return $this->hasOne('Infraestructura\Vehiculo','id','vehiculo');
    }
    public function enviCho()
    {
        return $this->hasOne('Infraestructura\User','id','chofer');
    }
    public function enviEncar()
    {
        return $this->hasOne('Infraestructura\User','id','encargado');
    }

    public function scopeEntidad($query, $entidad)
    {
        //El trim es para eliminar los espacios
        if(trim($entidad) != "")
        {
            //para q busque el nombre y el apellido es DB::raw con la function CONCAT mysql
            // El \ es para q tome el alias en la seccion de alias
            $query->where(\DB::raw("CONCAT(entidad)"), "LIKE","%$entidad%");    
        }
    }

                
}
