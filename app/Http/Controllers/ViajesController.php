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
use Infraestructura\Http\Requests\ViajeCreateRequest;
use Infraestructura\Http\Requests\ViajeUpdateRequest;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Auth;
class ViajesController extends Controller
{
    public function __construct()
    {
        $this->middleware('viaje',['only'=>['create','edit','getCancelar','destroy']]);
        $this->middleware('calendario',['only'=>['index']]);
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);

    }
    public function find(Route $route)
    {
        $this->vehiculo= Vehiculo::find($route->getParameter('vehiculo'));
        $this->chofer      = User::find($route->getParameter('chofer'));
        $this->encargado   = User::find($route->getParameter('encargado'));
        $this->destino     = Destino::find($route->getParameter('destino'));

        $this->ruta     = Ruta::find($route->getParameter('ruta'));
        $this->user_viaje     = User_Viaje::find($route->getParameter('user_viaje'));
        $this->destino_viaje  = Destino_Viaje::find($route->getParameter('destino_viaje'));

        $this->viaje   = Viaje::find($route->getParameter('viajes','chofer','vehiculo','encargado','destino','ruta','user_viaje','destino_viaje'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $viaje = Viaje::entidad($request->get('entidad'))->tipo($request->get('tipo'))->orderBy('id', 'DESC')->paginate(10);
        return view('automotores.viajes.index', compact('viaje'));
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
        $vehiculos  = Vehiculo::where('estado', 'optimo')
                    ->orderBy('tipog','ASC')
                    ->get(['id', 'tipog', 'placa'])
                    ->lists('full_vehiculo','id')->toArray();
        
        $destino   = Destino::orderBy('id','ASC')
                    ->get(['id','origen', 'destino','dep_inicio','dep_final'])
                    ->lists('full_destino','id')
                    ->toArray();


        return view('automotores.viajes.create',compact('choferes','encargados','vehiculos','destino'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ViajeCreateRequest $request)
    {   //dd($request);
        $a = strtotime($request['fecha_inicial']);
        $b = strtotime($request['fecha_final']);
        if($a > $b)
        {
            Session::flash('message-error','La fecha Inicial no debe ser mayor a la fecha Final!!!');   
            return Redirect::to('/viajes/create');          
        }
        $tipo      = $request['tipo'];
        $pasajeros = $request['pasajeros'];
       // dd($tipo);
        if($tipo == 'Viaje de Práctica' && $pasajeros < 20 )
        {
            Session::flash('mensaje-rol','La cantidad de pasageros para el viaje de práctica es incorrecto!!!');
            return Redirect::to('/viajes/create');          
        }
        $cantcho = count($request->chofer);
        $cantvehi= count($request->vehiculo);
        //dd($cantvehi);
        if ($cantcho < $cantvehi) 
        {
            Session::flash('message-error','La cantidad de vehículos no tiene que ser mayor a la de los choferes!!!');   
            return Redirect::to('/viajes/create');
        }

        $diferencia = abs(strtotime($request['fecha_final']) - strtotime($request['fecha_inicial']));

        $years  = floor($diferencia / (365*60*60*24));
        $months = floor(($diferencia - $years * 365*60*60*24) / (30*60*60*24));
        $days   = floor(($diferencia - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

        if($days == 0)
        {
             $days++;
        }   
        $activo = 'activo';
        $reseri = $request['reserva_id'];
        if(empty($reseri))
        {
            $reseri = null;
        }
        $viaje_id = \DB::table('viajes')->insertGetId([
            'entidad'       => $request['entidad'],
            'tipo'          => $request['tipo'],
            'objetivo'      => $request['objetivo'],
            'pasajeros'     => $request['pasajeros'],
            'fecha_inicial' => $request['fecha_inicial'],
            'fecha_final'   => $request['fecha_final'],
            'dias'          => $days,
            'estado'        => $activo,
            'reserva_id'    => $reseri
            ]);

        $chofer_id = $request['chofer'];
        foreach ($chofer_id as $id) 
        {
            User_Viaje::create([
                'user_id' =>$id,
                'viaje_id'=>$viaje_id
            ]);
        }

        $encargado_id = $request['encargado'];
        foreach ($encargado_id as $id) 
        {
            User_Viaje::create([
                'user_id' =>$id,
                'viaje_id'=>$viaje_id
            ]);
        }

        $vehiculo_id = $request['vehiculo'];
        foreach ($vehiculo_id as $id)
        {
            Vehiculo_Viaje::create([
                'vehiculo_id'=> $id,
                'viaje_id'   => $viaje_id
                ]);
        }
//////////////////////   Rutas   //////////////////////////////////////////////////
        if(!empty($request['destino_id']) && !empty($request['kilome']))
        {
            $destino_id = $request['destino_id'];
            $kilome     = $request['kilome'];
            Destino_Viaje::create([
                'destino_id'=> $destino_id,
                'viaje_id'  => $viaje_id
                ]);
        }
        else{
            $destino_id = "";
            $kilome     = "";
        }
        if(!empty($request['dest1']) && !empty($request['k1']))
        {
            $dest1  = $request['dest1'];
            $k1     = $request['k1'];
            Destino_Viaje::create([
                'destino_id'=> $dest1,
                'viaje_id'  => $viaje_id
                ]);
        }
        else{
            $dest1 = "";
            $k1    = "";
        }
        if(!empty($request['dest2']) && !empty($request['k2']))
        {
            $dest2 = $request['dest2'];
            $k2    = $request['k2'];
            Destino_Viaje::create([
                'destino_id'=> $dest2,
                'viaje_id'  => $viaje_id
                ]);
        }
        else{
            $dest2 = "";
            $k2    = "";
        }
        if(!empty($request['dest3']) && !empty($request['k3']))
        {
            $dest3  = $request['dest3'];
            $k3     = $request['k3'];
            Destino_Viaje::create([
                'destino_id'=> $dest3,
                'viaje_id'  => $viaje_id
                ]);
        }
        else{
            $dest3 = "";
            $k3    = "";
        }
        if(!empty($request['dest4']) && !empty($request['k4']))
        {
            $dest4 = $request['dest4'];
            $k4    = $request['k4'];
            Destino_Viaje::create([
                'destino_id'=> $dest4,
                'viaje_id'  => $viaje_id
                ]);
        }
        else{
            $dest4 = "";
            $k4    = "";
        }
        if(!empty($request['dest5']) && !empty($request['k5']))
        {
            $dest5 = $request['dest5'];
            $k5    = $request['k5'];
            Destino_Viaje::create([
                'destino_id'=> $dest5,
                'viaje_id'  => $viaje_id
                ]);
        }
        else{
            $dest5 = "";
            $k5    = "";
        }

        $a = intval($destino_id);
        $c = intval($dest1);
        $d = intval($dest2);
        $e = intval($dest3);
        $f = intval($dest4);
        $g = intval($dest5);

        if(!empty($request['adicional']))
        {
            Ruta::create([
                'destino_id'=> $a,
                'kilome'    => $kilome,
                'dest1'     => $c,
                'k1'        => $k1,
                'dest2'     => $d,
                'k2'        => $k2,
                'dest3'     => $e,
                'k3'        => $k3,
                'dest4'     => $f,
                'k4'        => $k4,
                'dest5'     => $g,
                'k5'        => $k5,
                'adicional' => $request['adicional'],
                'total'     => $request['total'],
                'viaje_id'  => $viaje_id
            ]);
            //dd("LLENO TODO");
        }
        else{
            dd("adicional vacio");    
        }
        Session::flash('message','El viaje se registró correctamente...');
        return Redirect::to('viajes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $viaje = Viaje::where('id',$id)->orderBy('id', 'DESC')->paginate(12);
        return view('automotores.viajes.index', compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
                    ->orderBy('tipog','ASC')
                    ->get(['id', 'tipog', 'placa'])
                    ->lists('full_vehiculo','id')->toArray();

        $destino   = Destino::orderBy('id','ASC')
                    ->get(['id','origen', 'destino','dep_inicio','dep_final'])
                    ->lists('full_destino');
        $viaje = Viaje::find($id);
        //dd($viaje);

        return view('automotores.viajes.edit',['via'=>$this->viaje],compact('viaje','destino','chofer','encargado','vehiculo'));        
    }

    /**si es recuando nos perman
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ViajeUpdateRequest $request, $id)
    {

        $ruta = Ruta::find($id);

        $ruta->destino_id = $request->destino_id;
        $ruta->kilome = $request->kilome;
        $ruta->dest1  = $request->dest1;
        $ruta->k1     = $request->k1;
        $ruta->dest2  = $request->dest2;
        $ruta->k2     = $request->k2;
        $ruta->dest3  = $request->dest3;
        $ruta->k3     = $request->k3;
        $ruta->dest4  = $request->dest4;
        $ruta->k4     = $request->k4;
        $ruta->dest5  = $request->dest5;
        $ruta->k5     = $request->k5;
        $ruta->adicional  = $request->adicional;
        $ruta->total      = $request->total;
        $ruta->viaje_id   = $id;
        $ruta->save();
        
        //Actualizamos viajes....
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
        $this->viaje->delete();
        Session::flash('message','El registro de viaje fue eliminado correctamente...');
        return Redirect::to('/viajes');
    }
    public function getCancelar($id)
    {
        Viaje::where('id',$id)
            ->update(['estado' => 'cancelado']);

        Session::flash('message','El viaje fue cancelado');
        return Redirect::to('/viajes');
    }
}
