<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Viaje;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;

class CalendarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('calendario',['only'=>['calendario','index']]);

    }
    public function calendario()
    {
        return view('automotores.viajes.calendario');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(); //declaramos un array principal que va contener los datos
        $id = Viaje::all()->lists('id'); //listamos todos los id de los eventos
        $title = Viaje::all()->lists('entidad');
        //lo mismo para lugar y fecha
        $star = Viaje::all()->lists('fecha_inicial');
        $end = Viaje::all()->lists('fecha_final');
        $count = count($id); //contamos los ids obtenidos para saber el numero exacto de eventos
        $estado = Viaje::all()->lists('estado');
        //hacemos un ciclo para anidar los valores obtenidos a nuestro array principal $data
        for($i=0;$i<$count;$i++){
            $data[$i] = array(
                "title"=>$title[$i], //obligatoriamente "title", "start" y "url" son campos requeridos
                "start"=>$star[$i],
                "end"=>$end[$i], //por el plugin asi que asignamos a cada uno el valor correspondiente
                "estado"=>$estado[$i],
                "url"=>"/viajes/".$id[$i]
                //en el campo "url" concatenamos el el URL con el id del evento para luego
                //en el evento onclick de JS hacer referencia a este y usar el método show
                //para mostrar los datos completos de un evento
            );
        }
 
        //json_encode($data); //convertimos el array principal $data a un objeto Json
        
        return response()->json($data); //para luego retornarlo y estar listo para consumirlo
    }

    
}
