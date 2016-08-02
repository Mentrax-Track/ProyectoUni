<?php

namespace Infraestructura;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

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
    protected $fillable = ['nombres','apellidos','cedula','celular','facultad','carrera','materia','sigla' ,'tipo','email', 'password'];

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
    public function getFullinstitucionAttribute()
    {
        return $this->facultad.' '.$this->carrera.' '.$this->materia.' '.$this->sigla;
    }

    public function setPasswordAttribute($valor)
    {
        //Si este valor no esta vacio bamos a cambiar la conontraseña
        if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
        }
    }
}
