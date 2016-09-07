<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\User;
use Infraestructura\Vehiculo;
use Infraestructura\Destino;
use Infraestructura\Vehiculo_Viaje;

class Viaje extends Model
{
    protected $table = 'viajes';
    
    protected $fillable = 
    [
        'entidad','tipo','objetivo','pasajeros',
        'dias','fecha_inicial','fecha_final'
    ];

    public function users()
    {
        return $this->belongsToMany('Infraestructura\User', 'user_viaje');
    }
    //a la table user_viaje un viaje puede haber muchos user_viaje
    public function user_viajes()
    {
        return $this->hasMany('Infraestructura\User_Viaje');   
    }

    public function vehiculos()
    {
        return $this->belongsToMany('Infraestructura\Vehiculo', 'vehiculo_viaje');
    }
    //a la table user_viaje un viaje puede haber muchos vehiculo_viaje
    public function vehiculo_viajes()
    {
        return $this->hasMany('Infraestructura\Vehiculo_Viaje');   
    }

    public function destinos()
    {
        return $this->belongsToMany('Infraestructura\Destino', 'destino_viaje');
    }
    
    //Un viaje puede realizar muchas rutas 
    public function rutas()
    {
        return $this->hasMany('Infraestructura\Ruta');   
    }
    public function scopeVia($query, $via)
    {
        if(trim($via) != "")
        {
            $query->where('entidad', "LIKE","%$via%");    
        }
    }

    /*public function enviar()
    {
        return $this->hasOne('automotores\Encargado','id','encargado_id');
    }
    public function enviCho()
    {
        return $this->hasOne('automotores\Chofer','id','chofer_id');
    }
    public function enviDes()
    {
        return $this->hasOne('automotores\Destino','id','destino_id');
    }
    public function enviVehi()
    {
        return $this->hasOne('automotores\Vehiculo','id','vehiculo_id');
    }

    public function scopeEntid($query, $entid)
    {
        if (trim($entid) != "")
        {
            $query->where(\DB::raw("CONCAT(entidad,' ',tipo)"), "LIKE","%$entid%");    
        }   
    }
    public function scopeChof($query, $chof)
    {
        if(trim($chof) != "" )
        {
            $query->where(\DB::raw("CONCAT(chofer_id,' ',destino_id)"), "LIKE","%$chof%");
        }
    }*/
}
