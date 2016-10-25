<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rol extends Model
{
    use SoftDeletes;
    protected $table = 'roles';
    
    protected $fillable = ['chofer_id','tipoa','tipob','tipoc','fecha','cantidad'];
    protected $dates = ['deleted_at'];
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
