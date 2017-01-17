<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Viaje;
use Infraestructura\Reserva;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Auth;
class TableroController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin',['only'=>['getImprimirmes','getImprimireservados','getImprimirealizados']]);
    }
    public function getRealizados()
    {
        //$viajes = Viaje::orderBy('id', 'DESC')->firstUserId;
        $viajes = Viaje::orderBy('id','DESC')->paginate(10);
        //dd($viajes);

        return view('automotores.tablero.realizados', compact('viajes'));
    }
    public function getReservas()
    {
        $reservas = Reserva::orderBy('id','DESC')->paginate(10);
        //dd($reservas);

        return view('automotores.tablero.reservados', compact('reservas'));
    }

    public function getVmes()
    {
        $fecha = new \DateTime();
        $fecha->modify('first day of this month');
        $diauno = $fecha->format('d/m/Y'); 

        $fecha = new \DateTime();
        $fecha->modify('last day of this month');
        $diaultimo  = $fecha->format('d/m/Y');
    
        $meses = Viaje::whereBetween('fecha_inicial', [$diauno, $diaultimo])
                    ->orderBy('id','DESC')->paginate(10);
        //dd($meses);

        return view('automotores.tablero.meses', compact('meses'));
    }
    public function getImprimirmes()
    {   
        $fecha = new \DateTime();
        $fecha->modify('first day of this month');
        $diauno = $fecha->format('d/m/Y'); 

        $fecha = new \DateTime();
        $fecha->modify('last day of this month');
        $diaultimo  = $fecha->format('d/m/Y');
        $viajes = Viaje::whereBetween('fecha_inicial', [$diauno, $diaultimo])
                    ->orderBy('id','DESC')->get();
        //dd($viajes);
        //echo "hola";
        $responsable = Auth::user()->full_name;
        //dd($responsable);
        // para el Mes

        $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
           'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
               'Miercoles', 'Jueves', 'Viernes', 'Sabado');
        $fecha = $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y');
        /*"Miercoles, 07 de Diciembre de 2016"*/
        $date = $arrayMeses[date('m')-1];
        
        $view = \View::make('automotores.tablero.pdfmes', compact('viajes','responsable', 'date', 'fecha'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta', 'portrat');
        return $pdf->stream('Informe del Mes');
    }
    public function getImprimireservados()
    {   
        $viajes = Reserva::orderBy('id','DESC')->paginate(10);
        //dd($viajes);
        $responsable = Auth::user()->full_name;
        //dd($responsable);
        $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
           'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
               'Miercoles', 'Jueves', 'Viernes', 'Sabado');
        $fecha = $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y');
        /*"Miercoles, 07 de Diciembre de 2016"*/
        
        $view = \View::make('automotores.tablero.pdfreservas', compact('viajes','responsable','fecha'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta', 'portrat');
        return $pdf->stream('Informe de las Reservas');
    }
    public function getImprimirealizados()
    {   
        $viajes = Viaje::orderBy('id','DESC')->get();
        //dd($viajes);
        $responsable = Auth::user()->full_name;
        //dd($responsable);
        $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
           'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
               'Miercoles', 'Jueves', 'Viernes', 'Sabado');
        $fecha = $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y');
        /*"Miercoles, 07 de Diciembre de 2016"*/
        
        $view = \View::make('automotores.tablero.pdfrealizados', compact('viajes','responsable','fecha'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta', 'portrat');
        return $pdf->stream('Total de Viajes');
    }
}

        