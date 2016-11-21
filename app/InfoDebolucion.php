<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class InfoDebolucion extends Model
{
    protected $table = 'informesdebolu';
    
    protected $fillable = ['combus','peaje','impre','totalcopeim','informesviaje_id'];
}
