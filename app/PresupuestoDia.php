<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\Viaje;
use Infraestructura\Ruta;
use Infraestructura\Destino;
class PresupuestoDia extends Model
{
    protected $table = 'presudias';
    protected $fillable = ['vehiculo','chofer','encargado','entidad','fechavu',
                            'viaje_id','combustible','responsable',
                            'vuelta','personal','motivo','numero','litros'];
    
    //Muchos presupuestos pueden ser de unn solo viaje
    public function viaje()
    {
        return $this->belongsTo('Infraestructura\Viaje');
    }
    //un presupuesto solo puede tener una ruta
    public function ruta()
    {
        return $this->hasOne('Infraestructura\Ruta');
    }
    public function enviEncar()
    {
        return $this->hasOne('Infraestructura\User','id','encargado');
    }
    public function enviCho()
    {
        return $this->hasOne('Infraestructura\User','id','chofer');
    }
    public function enviVehi()
    {
        return $this->hasOne('Infraestructura\Vehiculo','id','vehiculo');
    }
    //scope es una funcion de laravel
    public function scopeEntidad($query, $entidad)
    {
        //trim para eliminar los espacios
        if(trim($entidad) != "")
        {
            $query->where('entidad', "LIKE","%$entidad%");    
        }
    }
}
