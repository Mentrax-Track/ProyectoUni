<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Vehiculo extends Model
{

    protected $table = 'vehiculos';
    
    protected $fillable = ['codigo','tipo','placa','color','kilometraje','pasageros','path','estado'];

    public function UserVehi()
    {
        return $this->belongsTo('Infraestructura\UserVehi');
    }

    public function choferVehiculos()
    {
        return $this->hasMany('automotores\ChoferVehiculo');
    } 
    public function vehiculoViajes()
    {
        return $this->hasMany('automotores\VehiculoViaje');
    }  
    public function viajes()
    {
        return $this->hasMany('automotores\Viaje');
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
}
