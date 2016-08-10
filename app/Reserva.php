<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';
    
    protected $fillable = ['entidad','titulo','numero','fecha_inicial','fecha_final','dias','user_id'];

    public function user()
    {
        return $this->belongsTo('Infraestructura\User');
    }
    public $timestamps = true;

    public function enviar()
    {
        return $this->hasOne('Infraestructura\User','id','user');
    }

    public function scopeEnti($query, $enti)
    {
        if(trim($enti) != "")
        {
            $query->where('entidad', "LIKE","%$enti%");    
        }
    }
}
