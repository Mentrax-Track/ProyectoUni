<?php

namespace Infraestructura\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;

use Session;

class Viaje
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $tipo = $this->auth->user()->tipo;
        if ( $tipo == 'mecanico' OR $tipo == 'chofer' OR $tipo == 'encargado' ) 
        {
            Session::flash('mensaje-rol','Sin privilegios');
            return redirect()->to('acceso');
        }
        return $next($request);
    }
}
