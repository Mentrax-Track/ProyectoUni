<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\Viaje;
use Infraestructura\Mapa;

class Destino extends Model
{
    protected $table = 'destinos';
    
    protected $fillable = ['id','dep_inicio','origen','ruta','dep_final','destino','kilometraje','tiempo'];

    public function viajes()
    {
        return $this->belongsToMany('Infraestructura\Viaje', 'destino_viaje');
    }
    public function mapa()
    {
        return $this->hasOne('Infraestructura\Mapa');
    }
    public function mapax()
    {
        return $this->hasMany('Infraestructura\Mapa');
    }
    public function getFullmapadestiAttribute()
    {
        return  'Ubicación: '.$this->destino;
    }

    /*public function viaje()
    {
        return $this->belongsTo('Infraestructura\Viaje');
    }*/
    //scope es una funcion de laravel
    public function scopeRuta($query, $ruta)
    {
        //La funcion trim para eliminar los espacion
        if(trim($ruta) != "")
        {
            $query->where(\DB::raw("CONCAT(origen,' ',destino)"), "LIKE", "%$ruta%");
        }
    }
    public function scopeDep($query, $dep)
    {
        $deps = config('dep.deps');

        if($dep != "" && isset($deps[$dep]))
        {
            $query->where(\DB::raw("CONCAT(dep_inicio,' ',dep_final)"), "LIKE", "%$dep%");
        }
    }
    public function getFulldestinoAttribute()
    {
        return '('.$this->dep_inicio.'):'.$this->origen.' HASTA ('.$this->dep_final.'):'.$this->destino;
    }
    public function presupuestos()
    {
        return $this->hasMany('Infraestructura\Presupuesto');
    }
}
