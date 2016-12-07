<?php

namespace Infraestructura;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Infraestructura\Vehiculo;
use Infraestructura\Viaje;
use Infraestructura\Reserva;
use Infraestructura\User_Viaje;
use Infraestructura\Salida;
use Infraestructura\InformeViaje;
use Infraestructura\Entidad;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','cedula','celular','tipo','email', 'password'];

    //Un usuario puede tener muchos vehiculos
    public function vehiculos()
    {
         return $this->belongsToMany('Infraestructura\Vehiculo', 'vehiculo_user');
    }
    public function viajes()
    {
         return $this->belongsToMany('Infraestructura\Viaje', 'user_viaje');
    }
    //a la table user_viaje un usuario puede haber muchos user_viaje
    public function user_viajes()
    {
        return $this->hasMany('Infraestructura\User_Viaje');   
    }
    //Relacion uno a uno con Entidad
    public function entidad()
    {
        return $this->hasOne('Infraestructura\Entidad');
    }
    //Un usuario puede realizar muchas reservas 
    public function reservas()
    {
        return $this->hasMany('Infraestructura\Reserva');   
    }


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function getFullnameAttribute()
    {
        return $this->nombres.' '.$this->apellidos;
    }

    public function setPasswordAttribute($valor)
    {
        //Si este valor no esta vacio bamos a cambiar la conontraseña ***(*** bcrypt($valor) ***)
        if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
            //$this->attributes['password'] = $valor;
        }
    }

    public function scopeName($query, $name)
    {
        //El trim es para eliminar los espacios
        if(trim($name) != "")
        {
            //para q busque el nombre y el apellido es DB::raw con la function CONCAT mysql
            // El \ es para q tome el alias en la seccion de alias
            $query->where(\DB::raw("CONCAT(nombres, ' ',apellidos)"), "LIKE","%$name%");    
        }
    }
    public function scopeTipo($query, $tipo)
    {
        $tipos = config('completo.completos');

        if($tipo != "" && isset($tipos[$tipo]))
        {
            $query->where('tipo', $tipo);
        }
    }

    public function UserVehi()
    {
        return $this->belongsTo('Infraestructura\UserVehi');
    }
    public function presupuestos()
    {
        return $this->hasMany('Infraestructura\Presupuesto');
    }
    public function presupuestosDia()
    {
        return $this->hasMany('Infraestructura\PresupuestoDia');
    }
    public function roles()
    {
        return $this->hasMany('Infraestructura\Rol');
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
