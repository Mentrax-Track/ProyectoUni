<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
class Rol extends Model
{
    protected $table = 'roles';
    
    protected $fillable = ['chofer_id','tipoa','tipob','tipoc','fecha','cantidad'];

    public function chofer()
    {
        return $this->belongsTo('Infraestructura\User');
    }
    public function enviarChofer()
    {
        return $this->hasOne('Infraestructura\User','id','chofer_id');
    }
    public function rolviajes()
    {
        return $this->hasMany('Infraestructura\RolViaje');
    }
}
