<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';
    
    protected $fillable = ['entidad','objetivo','pasajeros','fecha_inicial','fecha_final','dias','user_id'];
    //delete from reservas where user_id not in  (select id from users where tipo='encargado')
    
    //cada reserva puede estar con un solo encargado
    public function user()
    {
        return $this->belongsTo('Infraestructura\User');
    }


    public function enviar()
    {
        return $this->hasOne('Infraestructura\User','id','user_id');
    }

    public function scopeEnti($query, $enti)
    {
        if(trim($enti) != "")
        {
            $query->where('entidad', "LIKE","%$enti%");    
        }
    }
}
