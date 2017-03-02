<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Infraestructura\User;
use Infraestructura\Viaje;
use Infraestructura\Modelo;
use Infraestructura\Salida;
use Infraestructura\Solicitud;

use Infraestructura\Recargue;
use Infraestructura\InformeViaje;
class Vehiculo extends Model
{

    protected $table = 'vehiculos';
    
    protected $fillable = ['codigo','placa','color','pasageros','tipog','estado'];

    //Un vehiculo puede pertenecer a muchos usuarios
    public function users()
    {
        return $this->belongsToMany('Infraestructura\User', 'vehiculo_user');
    }
    public function viajes()
    {
        return $this->belongsToMany('Infraestructura\Viaje', 'vehiculo_viaje');
    }
    //a la table vehiculo_viaje un vehiculo puede haber muchos vehiculo_viaje
    public function vehiculo_viajes()
    {
        return $this->hasMany('Infraestructura\Vehiculo_Viaje');   
    }
    public function modelo()
    {
        return $this->hasOne('Infraestructura\Modelo');
    }
    
    public function scopePlaca($query, $placa)
    {
        //si el campo placa no esta vacio entra y si no no
        //trim para eliminar los espacios en blanco
        if(trim($placa) != "")
        {
            $query->where(\DB::raw("CONCAT(codigo, ' ',placa)"),"LIKE","%$placa%");    
        }
        
    }
    public function scopeEstado($query, $estado)
    {
        $estados = config('vehiculos.estados');

        if($estado != "" && isset($estados[$estado]))
        {
            $query->where('estado',$estado);
        }
    }
    

    public function getFullvehiculoAttribute()
    {
        return $this->tipog.' '.$this->placa;
    }
    public function presupuestos()
    {
        return $this->hasMany('Infraestructura\Presupuesto');
    }
    public function salida()
    {
        return $this->hasOne('Infraestructura\Salida');
    }
    public function informeviajes()
    {
        return $this->hasOne('Infraestructura\InformeViaje');
    }

    public function solicitudes()
    {
        return $this->hasMany('Infraestructura\Solicitud');
    }
    public function combustible()
    {
        return $this->hasOne('Infraestructura\Combustible');
    }

    public function recargue()
    {
        return $this->hasOne('Infraestructura\Recargue');
    }
}
