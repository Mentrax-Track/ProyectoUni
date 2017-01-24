<?php

namespace Infraestructura\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Infraestructura\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \Infraestructura\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Infraestructura\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \Infraestructura\Http\Middleware\RedirectIfAuthenticated::class,
        'admin' => \Infraestructura\Http\Middleware\Admin::class,
        'vehiculo' => \Infraestructura\Http\Middleware\Vehiculo::class,
        'reserva' => \Infraestructura\Http\Middleware\Reserva::class,
        'viaje' => \Infraestructura\Http\Middleware\Viaje::class,
        'informe' => \Infraestructura\Http\Middleware\Informe::class,
        'calendario' => \Infraestructura\Http\Middleware\Calendario::class,
        'presupuesto' => \Infraestructura\Http\Middleware\Presupuesto::class,
        'mecanico' => \Infraestructura\Http\Middleware\Mecanico::class,


        
    ];
}







