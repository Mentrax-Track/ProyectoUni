<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'emails';
    
    protected $fillable = ['id','email','user_id'];
}
