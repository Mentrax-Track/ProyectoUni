<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\User;

class Entidad extends Model
{
    protected $table = 'entidades';
    
    protected $fillable = ['id','facultad','carrera','materia','sigla','user_id'];

    //Relacion uno auno con User
    public function user()
    {
        return $this->belongsTo('Infraestructura\User');
    }
    
    public function getFullinstitucionAttribute()
    {
        return $this->facultad.' '.$this->carrera.' '.$this->materia.' '.$this->sigla;
    }
    public function envisUser()
    {
        return $this->hasOne('Infraestructura\User','id','user_id');
    }
}
