<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Viaje;
use Infraestructura\Vehiculo;
use Infraestructura\User;
use Infraestructura\Destino;

use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
class ViajesController extends Controller
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
        $viaje = Viaje::orderBy('id', 'DESC')->paginate(12);
        return view('automotores.viajes.index', compact('viaje'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $encargado = User::where('tipo', 'encargado')
                    ->orderBy('nombres','ASC')
                    ->get(['id', 'nombres', 'apellidos'])
                    ->lists('full_name','id');
        $chofer    = User::where('tipo', 'chofer')
                    ->orderBy('nombres','ASC')
                    ->get(['id', 'nombres', 'apellidos'])
                    ->lists('full_name','id');
        $vehiculo  = Vehiculo::where('estado', 'Optimo')
                    ->orderBy('tipo','ASC')
                    ->get(['id', 'tipo', 'placa'])
                    ->lists('full_vehiculo','id');
        $destino   = Destino::orderBy('origen','ASC')
                    ->get(['id', 'origen', 'destino'])
                    ->lists('full_destino','id');


        return view('automotores.viajes.create',compact('chofer','encargado','vehiculo','destino'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diferencia = abs(strtotime($request['fecha_final']) - strtotime($request['fecha_inicial']));

        $years = floor($diferencia / (365*60*60*24));
        $months = floor(($diferencia - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diferencia - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

        Viaje::create([
            'tipo'          => $request['tipo'],
            'objetivo'      => $request['objetivo'],
            'numero'        => $request['numero'],
            'fecha_inicial' => $request['fecha_inicial'],
            'fecha_final'   => $request['fecha_final'],
            'dias'          => $days,
            'user_id'       => $request['chofer_id'],
            'vehiculo_id'   => $request['vehiculo_id'],
            ]);
        Session::flash('message','El viaje se registro correctamente...');
        return Redirect::to('/viajes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chofer = User::lists('nombres','id');
        $vehiculo= Vehiculo::lists('tipo','id');

        return view('automotores.viajes.edit',['via'=>$this->viaje], compact('encargado','chofer','destino','vehiculo'));
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
        $chofer = User::lists('nombres','id');
        $vehiculo= Vehiculo::lists('tipo','id');
        $this->viaje->fill($request->all());
        $this->viaje->save();
        Session::flash('message','El registro de viaje fue editado correctamente...');
        return Redirect::to('/viajes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chofer = Chofer::lists('nombre','id');
        $vehiculo= Vehiculo::lists('tipo','id');
        $this->viaje->delete();
        Session::flash('message','El registro de viaje fue eliminado correctamente...');
        return Redirect::to('/viajes');
    }
}
