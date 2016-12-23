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
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;

class RutasController extends Controller
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
        $choferes = \DB::table('users')
        ->join('user_viaje','users.id','=','user_viaje.user_id')
        ->join('viajes','user_viaje.viaje_id','=','viajes.id')
        ->where('user_viaje.viaje_id',$id)
        ->where('users.tipo','chofer')
        ->select('users.nombres as n','users.apellidos as a','viajes.id as i','users.celular as c')
        ->get();
       //dd($choferes);

        $encargados = \DB::table('users')
        ->join('user_viaje','users.id','=','user_viaje.user_id')
        ->join('viajes','user_viaje.viaje_id','=','viajes.id')
        ->where('user_viaje.viaje_id',$id)
        ->where('users.tipo','encargado')
        ->select('users.nombres as n','users.apellidos as a','viajes.id as i','users.celular as c')
        ->get();
        //dd($encargados);
        
        $vehiculos  = \DB::table('vehiculos')
        ->join('vehiculo_viaje','vehiculos.id','=','vehiculo_viaje.vehiculo_id')
        ->join('viajes','vehiculo_viaje.viaje_id','=','viajes.id')
        ->where('vehiculo_viaje.viaje_id',$id)
        ->select('vehiculos.tipog as t','vehiculos.placa as p','viajes.id as i')
        ->get();
        //dd($vehiculos);
///////////////////////////////////// Destinos ///////////////////////
        $destino_id = Ruta::where('viaje_id',$id)
                ->select('destino_id')->lists('destino_id')->toArray();
        //dd($destino_id);
        $destinos = \DB::table('destinos')
        ->join('destino_viaje','destinos.id','=','destino_viaje.destino_id')
        ->join('viajes','destino_viaje.viaje_id','=','viajes.id')
        ->join('rutas','viajes.id','=','rutas.viaje_id')
        ->where('destinos.id',$destino_id)
        ->where('viajes.id',$id)
        ->select('viajes.id as i','destinos.dep_inicio as ini','destinos.origen as o','destinos.destino as d','destinos.ruta as r','destinos.dep_final as fin','rutas.kilome as k')
        ->distinct()
        ->get();
        //dd($destinos);

        $dest1 = Ruta::where('viaje_id',$id)
                ->select('dest1')->lists('dest1')->toArray();
        //dd($dest1);
        $desti1 = \DB::table('destinos')
        ->join('destino_viaje','destinos.id','=','destino_viaje.destino_id')
        ->join('viajes','destino_viaje.viaje_id','=','viajes.id')
        ->join('rutas','viajes.id','=','rutas.viaje_id')
        ->where('destinos.id',$dest1)
        ->where('viajes.id',$id)
        ->select('viajes.id as i','destinos.dep_inicio as ini','destinos.origen as o','destinos.destino as d','destinos.dep_final as fin','destinos.ruta as r','rutas.k1 as k')
        ->distinct()
        ->get();
        //dd($desti1);

        $dest2 = Ruta::where('viaje_id',$id)
                ->select('dest2')->lists('dest2')->toArray();
        //dd($dest2);
        $desti2 = \DB::table('destinos')
        ->join('destino_viaje','destinos.id','=','destino_viaje.destino_id')
        ->join('viajes','destino_viaje.viaje_id','=','viajes.id')
        ->join('rutas','viajes.id','=','rutas.viaje_id')
        ->where('destinos.id',$dest2)
        ->where('viajes.id',$id)
        ->select('viajes.id as i','destinos.dep_inicio as ini','destinos.origen as o','destinos.destino as d','destinos.dep_final as fin','destinos.ruta as r','rutas.k2 as k')
        ->distinct()
        ->get();
        //dd($desti2);

        $dest3 = Ruta::where('viaje_id',$id)
                ->select('dest3')->lists('dest3')->toArray();
        //dd($dest3);
        $desti3 = \DB::table('destinos')
        ->join('destino_viaje','destinos.id','=','destino_viaje.destino_id')
        ->join('viajes','destino_viaje.viaje_id','=','viajes.id')
        ->join('rutas','viajes.id','=','rutas.viaje_id')
        ->where('destinos.id',$dest3)
        ->where('viajes.id',$id)
        ->select('viajes.id as i','destinos.dep_inicio as ini','destinos.origen as o','destinos.destino as d','destinos.dep_final as fin','destinos.ruta as r','rutas.k3 as k')
        ->distinct()
        ->get();
        //dd($desti3);

        $dest4 = Ruta::where('viaje_id',$id)
                ->select('dest4')->lists('dest4')->toArray();
        //dd($dest4);
        $desti4 = \DB::table('destinos')
        ->join('destino_viaje','destinos.id','=','destino_viaje.destino_id')
        ->join('viajes','destino_viaje.viaje_id','=','viajes.id')
        ->join('rutas','viajes.id','=','rutas.viaje_id')
        ->where('destinos.id',$dest4)
        ->where('viajes.id',$id)
        ->select('viajes.id as i','destinos.dep_inicio as ini','destinos.origen as o','destinos.destino as d','destinos.dep_final as fin','destinos.ruta as r','rutas.k4 as k')
        ->distinct()
        ->get();
        //dd($desti4);

        $dest5 = Ruta::where('viaje_id',$id)
                ->select('dest5')->lists('dest5')->toArray();
        //dd($dest5);
        $desti5 = \DB::table('destinos')
        ->join('destino_viaje','destinos.id','=','destino_viaje.destino_id')
        ->join('viajes','destino_viaje.viaje_id','=','viajes.id')
        ->join('rutas','viajes.id','=','rutas.viaje_id')
        ->where('destinos.id',$dest5)
        ->where('viajes.id',$id)
        ->select('viajes.id as i','destinos.dep_inicio as ini','destinos.origen as o','destinos.destino as d','destinos.dep_final as fin','destinos.ruta as r','rutas.k5 as k')
        ->distinct()
        ->get();  
        //dd($desti5);
        $adici = Ruta::where('viaje_id',$id)
                ->select('adicional')->get();
        //dd($adici);

        $total = Ruta::where('viaje_id',$id)
                ->select('total')->get();
        //dd($total);
           
        return view('automotores.viajes.rutas',compact('choferes','encargados','vehiculos','destinos','desti1','desti2','desti3','desti4','desti5','adici','total'));
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
