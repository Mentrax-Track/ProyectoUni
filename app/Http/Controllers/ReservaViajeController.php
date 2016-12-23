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
use Infraestructura\Reserva;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Auth;
class ReservaViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva = Reserva::find($id);
        //$idencar = $reserva->user_id;
        //$encar = User::where('id',$idencar)->get(['nombres','apellidos','id'])->lists('full_name','id')->toArray();
        //dd($reserva);
        
        $encargados = User::where('tipo', 'encargado')
                    ->orderBy('nombres','ASC')
                    ->get(['id', 'nombres', 'apellidos'])
                    ->lists('full_name','id');
        $choferes    = User::where('tipo', 'chofer')
                    ->orderBy('nombres','ASC')
                    ->get(['id', 'nombres', 'apellidos'])
                    ->lists('full_name','id');
        $vehiculos  = Vehiculo::where('estado', 'optimo')
                    ->orderBy('tipog','ASC')
                    ->get(['id', 'tipog', 'placa'])
                    ->lists('full_vehiculo','id')->toArray();

        $destino   = Destino::orderBy('id','ASC')
                    ->get(['id','origen', 'destino','dep_inicio','dep_final'])
                    ->lists('full_destino','id')
                    ->toArray();

                    //dd($encar);
        return view('automotores.reservi.create',compact('reserva','choferes','destino','vehiculos','encargados'));
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
    