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


        return view('automotores.viajes.create',compact('choferes','encargados','vehiculos','destino'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ViajeCreateRequest $request)
    {
        $a = strtotime($request['fecha_inicial']);
        $b = strtotime($request['fecha_final']);
        if($a > $b)
        {
            Session::flash('message-error','La fecha Inicial no debe ser mayor a la fecha Final');   
            return Redirect::to('/viajes/create');          
        }
        $tipo      = $request['tipo'];
        $pasajeros = $request['pasajeros'];
       // dd($tipo);
        if($tipo == 'Viaje de Práctica' && $pasajeros < 20 )
        {
            Session::flash('message-error','La cantidad de pasageros para el viaje de práctica es incorrecto');   
            return Redirect::to('/viajes/create');          
        }

        $diferencia = abs(strtotime($request['fecha_final']) - strtotime($request['fecha_inicial']));

        $years  = floor($diferencia / (365*60*60*24));
        $months = floor(($diferencia - $years * 365*60*60*24) / (30*60*60*24));
        $days   = floor(($diferencia - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));


        $viaje_id = \DB::table('viajes')->insertGetId([
            'entidad'       => $request['entidad'],
            'tipo'          => $request['tipo'],
            'objetivo'      => $request['objetivo'],
            'pasajeros'     => $request['pasajeros'],
            'fecha_inicial' => $request['fecha_inicial'],
            'fecha_final'   => $request['fecha_final'],
            'dias'          => $days
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
                'destino_id'=> 1+$destino_id,
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
                'destino_id'=> 1+$dest1,
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
                'destino_id'=> 1+$dest2,
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
                'destino_id'=> 1+$dest3,
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
                'destino_id'=> 1+$dest4,
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
                'destino_id'=> 1+$dest5,
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
        if(!empty($a))
            $a++;
        if(!empty($c))
            $c++;
        if(!empty($d))
            $d++;
        if(!empty($e))
            $e++;
        if(!empty($f))
            $f++;
        if(!empty($g))
            $g++;

       // $b = (float)$kilome;
       // dd($b);
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
        Session::flash('message','El viaje se registro correcctamente...');
        return Redirect::to('viajes');

        


        //dump($request['encargado']);
        /*Session::flash('message','El viaje se registro correctamente...');
        return Redirect::to('/viajes');*/
       
        
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

        return view('automotores.viajes.edit',['via'=>$this->viaje],compact('choferes','encargados','vehiculos','destino'));
        
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
}
