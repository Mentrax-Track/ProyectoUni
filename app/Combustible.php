<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Combustible extends Model
{
    use SoftDeletes;
    protected $table = 'combustibles';
    
    protected $fillable = ['vehiculo_id','gasolina','prega','toga','diesel','predi','todi','gnv','pregn','togn','fecha'];
    protected $dates = ['deleted_at'];
    public function vehiculo()
    {
        return $this->belongsTo('Infraestructura\Vehiculo');
    }
    public function enviarVehiculo()
    {
        return $this->hasOne('Infraestructura\Vehiculo','id','vehiculo_id');
    }
    public function detallescombus()
    {
        return $this->hasMany('Infraestructura\DetalleCombus');
    }
}
