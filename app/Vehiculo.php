<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Infraestructura\User;
use Infraestructura\Viaje;
use Infraestructura\Salida;
use Infraestructura\InformeViaje;
class Vehiculo extends Model
{

    protected $table = 'vehiculos';
    
    protected $fillable = ['codigo','tipo','placa','color','kilometraje','pasageros','path','estado'];

    //Un vehiculo puede pertenecer a muchos usuarios
    public function users()
    {
        return $this->belongsToMany('Infraestructura\User', 'vehiculo_user');
    }
    public function viajes()
    {
        return $this->belongsToMany('Infraestructura\Viaje', 'vehiculo_viaje');
    }
    //a la table vehiculo_viaje un vehiculo puede haber muchos vehiculo_viaje
    public function vehiculo_viajes()
    {
        return $this->hasMany('Infraestructura\Vehiculo_Viaje');   
    }
   
    //mutador para modificar elementos antes de ser guardados
    /*public function setPathAttribute($path){
        if(! empty($path)){
            $name = Carbon::now()->second.$path->getClientOriginalName();
            $this->attributes['path'] = $name;
            \Storage::disk('local')->put($name, \File::get($path));
        }
    }*/
    public static function filtroBusqueda($tip, $esta)
    {
        return Vehiculo::tip($tip)
            ->esta($esta)
            ->orderBy('id','DES')
            ->paginate(10);
    }
    //scope es una funcion de laravfel
    public function scopeTip($query, $tip)
    {
        //La funcion trim para eliminar los espacion
        if(trim($tip) != "")
        {
            //$query->where('tipo', "LIKE", "%$pla%");
             $query->where('tipo', $tip);
        }
    }
    public function scopeEsta($query, $esta)
    {
        //En esta variable agarramos todos las opciones de la columna estado
        $estas = config('estados.estas');

        //if(trim($esta) != "")
        //Verificamos el estado q esta enviando el usuario no este vacio 
        //y Ademas que exista dentro de los estados validos del vehiculo
        if($esta != "" && isset($estas[$esta]))
        {
            $query->where('estado',$esta);
        }
    }
    public function getFullvehiculoAttribute()
    {
        return $this->tipo.' '.$this->placa;
    }
    public function presupuestos()
    {
        return $this->hasMany('Infraestructura\Presupuesto');
    }
    public function salida()
    {
        return $this->hasOne('Infraestructura\Salida');
    }
    public function informeviajes()
    {
        return $this->hasOne('Infraestructura\InformeViaje');
    }
}
