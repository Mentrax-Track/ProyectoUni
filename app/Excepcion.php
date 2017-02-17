<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Excepcion extends Model
{
    protected $table = 'excepciones';
    
    protected $fillable = ['id','chofer_id','roles_id','tipo','lugar','fecha'];

    public function enviarChofer()
    {
        return $this->hasOne('Infraestructura\User','id','chofer_id');
    }
    public function rol()
    {
        return $this->belongsTo('Infraestructura\Rol');
    }

}
