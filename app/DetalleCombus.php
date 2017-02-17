<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class DetalleCombus extends Model
{
    protected $table = 'detallescombus';
    
    protected $fillable = ['vehiculo_id','gasolina','diesel','gnv','fecha','combustible_id'];
    public function combustibles()
    {
        return $this->belongsTo('Infraestructura\Combustible');
    }
    public function enviarVehiculo()
    {
        return $this->hasOne('Infraestructura\Vehiculo','id','vehiculo_id');
    }
}
