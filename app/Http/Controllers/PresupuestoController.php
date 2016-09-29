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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        Presupuesto::create($request->all());
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

        $destino   = Destino::orderBy('id','ASC')
                    ->get(['id','origen', 'destino'])
                    ->lists('full_destino');

        $viaje = Viaje::find($id);

        $ruta = Ruta::where('viaje_id',$id)->first();
        //Destinos
        $destino_i = Ruta::where('viaje_id',$id)
                ->select('destino_id')->lists('destino_id')->toArray();
        $destino_id = Destino::where('id',$destino_i)
            ->get(['origen','destino'])
            ->lists('full_destino')->toArray();
        //dd($destino_id);
        $dest = Ruta::where('viaje_id',$id)
                ->select('dest1')->lists('dest1')->toArray();
        $dest1 = Destino::where('id',$dest)
            ->get(['origen','destino'])
            ->lists('full_destino')->toArray();

        $dest2a = Ruta::where('viaje_id',$id)
                ->select('dest2')->lists('dest2')->toArray();
        $dest2 = Destino::where('id',$dest2a)
            ->get(['origen','destino'])
            ->lists('full_destino')->toArray();        

        $dest3a = Ruta::where('viaje_id',$id)
                        ->select('dest3')->lists('dest3')->toArray();
        $dest3 = Destino::where('id',$dest3a)
            ->get(['origen','destino'])
            ->lists('full_destino')->toArray();

        $dest4a = Ruta::where('viaje_id',$id)
                        ->select('dest4')->lists('dest4')->toArray();
        $dest4 = Destino::where('id',$dest4a)
            ->get(['origen','destino'])
            ->lists('full_destino')->toArray();

        $dest5a = Ruta::where('viaje_id',$id)
                        ->select('dest5')->lists('dest5')->toArray();
        $dest5 = Destino::where('id',$dest5a)
            ->get(['origen','destino'])
            ->lists('full_destino')->toArray();

        $responsable = Auth::user()->full_name;

        return view('automotores.presupuesto.create',compact('responsable','dest1','dest2','dest3','dest4','dest5','destino_id','ruta','viaje','choferes','encargados','vehiculos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
