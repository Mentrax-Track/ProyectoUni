<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    protected $table = 'viajes';
    
    protected $fillable = ['tipo','objetivo','dias','numero','fecha_inicial','fecha_final','user_id','vehiculo_id','destino_completo'];

    public function encargado()
    {
        return $this->belongsTo('automotores\Encargado');
    }
    public function chofer()
    {
        return $this->belongsTo('automotores\Chofer');
    }
    public function destino()
    {
        return $this->belongsTo('automotores\Destino');
    }
    public function vehiculoViaje()
    {
        return $this->belongsTo('automotores\VehiculoViaje');
    }
    
    public function scopeVia($query, $via)
    {
        if(trim($via) != "")
        {
            $query->where('entidad', "LIKE","%$via%");    
        }
    }

    public function enviar()
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
    }
}
