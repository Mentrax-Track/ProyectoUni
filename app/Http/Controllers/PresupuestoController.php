<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Viaje;
use Infraestructura\Vehiculo;
use Infraestructura\User;
use Infraestructura\Destino;
use Infraestructura\User_Viaje;
use Infraestructura\Vehiculo_Viaje;
use Infraestructura\Ruta;
use Infraestructura\Destino_Viaje;
use Infraestructura\Presupuesto;

use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Auth;
class PresupuestoController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);

    }
    public function find(Route $route)
    {
        $this->vehiculo= Vehiculo::find($route->getParameter('vehiculo'));
        $this->chofer      = User::find($route->getParameter('chofer'));
        $this->encargado   = User::find($route->getParameter('encargado'));
        $this->destino     = Destino::find($route->getParameter('destino'));
        $this->viaje   = Viaje::find($route->getParameter('viajes','chofer','vehiculo','encargado','destino'));
    }
    /*
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presupuesto = Presupuesto::orderBy('id','ASC')->paginate(10);
        return view('automotores.presupuesto.index',compact('presupuesto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $encargados = User::where('tipo', 'encargado')
                    ->orderBy('nombres','ASC')
                    ->get(['id', 'nombres', 'apellidos'])
                    ->lists('full_name','id');
        $choferes    = User::where('tipo', 'chofer')
                    ->orderBy('nombres','ASC')
                    ->get(['id', 'nombres', 'apellidos'])
                    ->lists('full_name','id');
        $vehiculos  = Vehiculo::where('estado', 'Optimo')
                    ->orderBy('tipo','ASC')
                    ->get(['id', 'tipo', 'placa'])
                    ->lists('full_vehiculo','id')->toArray();
                    
        return view('automotores.presupuesto.create',compact('choferes','encargados','vehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $presupuesto = new Presupuesto;
        $presupuesto->create($request->all());
        Session::flash('mensaje','Presupuesto creado correctamente');
        return redirect('/presupuestos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $presupuesto = Presupuesto::find($id);
        $date = date('Y-m-d');
        $view =  \View::make('automotores.presupuesto.ver', compact( 'date', 'presupuesto'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta', 'portrat');
        return $pdf->stream('invoice');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presupuesto = Presupuesto::find($id);
        return view('automotores.presupuesto.edit',['presupuesto'=>$presupuesto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $presupuesto=Presupuesto::find($id);
        $presupuesto->fill($request->all());
        
        $presupuesto->save();
        Session::flash('mensaje','Presupuesto editado correctamente');
        return redirect('presupuestos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Presupuesto::destroy($id);
        Session::flash('mensaje','Presupuesto Eliminado correctamente');
        return Redirect::to('/presupuestos');
    }
}
