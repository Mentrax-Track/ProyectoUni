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
use Infraestructura\PresupuestoDia;
use Infraestructura\Http\Requests\PresuDiaCreateRequest;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Auth;

class PresupuestosDiaController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->presupuesto = PresupuestoDia::find($route->getParameter('presudias'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $presupuesto = PresupuestoDia::entidad($request->get('entidad'))->orderBy('id','ASC')->paginate(10);
        return view('automotores.presupuestoDia.index',compact('presupuesto'));
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
    public function store(PresuDiaCreateRequest $request)
    {
        //dd($request);
        PresupuestoDia::create($request->all());
        Session::flash('message','Presupuesto de viaje creado correctamente...');
        return redirect('presupuestosDia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encargados  = User::where('tipo', 'encargado')
                    ->orderBy('id','ASC')
                    ->get(['id', 'nombres', 'apellidos'])
                    ->lists('full_name','id')->toArray();
        $choferes  = User::where('tipo', 'chofer')
                    ->orderBy('id','ASC')
                    ->get(['id', 'nombres', 'apellidos'])
                    ->lists('full_name','id')->toArray();            
        $vehiculos  = Vehiculo::where('estado', 'optimo')
                    ->orderBy('tipog','ASC')
                    ->get(['id', 'tipog', 'placa'])
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

        return view('automotores.presupuestoDia.create',compact('responsable','dest1','dest2','dest3','dest4','dest5','destino_id','ruta','viaje','choferes','encargados','vehiculos'));
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
        $vehiculos  = Vehiculo::where('estado', 'optimo')
                    ->orderBy('tipog','ASC')
                    ->get(['id', 'tipog', 'placa'])
                    ->lists('full_vehiculo','id')->toArray();

        $destino   = Destino::orderBy('id','ASC')
                    ->get(['id','origen', 'destino'])
                    ->lists('full_destino');

        $ide = PresupuestoDia::where('id',$id)
                    ->get(['viaje_id'])->lists('viaje_id')->toArray();
        $ids = $ide[0];
        //dd($ids);
        
        $viaje = Viaje::find($ids);

        $ruta = Ruta::where('viaje_id',$ids)->first();
        //Destinos
        $destino_i = Ruta::where('viaje_id',$ids)
                ->select('destino_id')->lists('destino_id')->toArray();
        $destino_id = Destino::where('id',$destino_i)
            ->get(['origen','destino'])
            ->lists('full_destino')->toArray();
        //dd($destino_id);
        $dest = Ruta::where('viaje_id',$ids)
                ->select('dest1')->lists('dest1')->toArray();
        $dest1 = Destino::where('id',$dest)
            ->get(['origen','destino'])
            ->lists('full_destino')->toArray();

        $dest2a = Ruta::where('viaje_id',$ids)
                ->select('dest2')->lists('dest2')->toArray();
        $dest2 = Destino::where('id',$dest2a)
            ->get(['origen','destino'])
            ->lists('full_destino')->toArray();        

        $dest3a = Ruta::where('viaje_id',$ids)
                        ->select('dest3')->lists('dest3')->toArray();
        $dest3 = Destino::where('id',$dest3a)
            ->get(['origen','destino'])
            ->lists('full_destino')->toArray();

        $dest4a = Ruta::where('viaje_id',$ids)
                        ->select('dest4')->lists('dest4')->toArray();
        $dest4 = Destino::where('id',$dest4a)
            ->get(['origen','destino'])
            ->lists('full_destino')->toArray();

        $dest5a = Ruta::where('viaje_id',$ids)
                        ->select('dest5')->lists('dest5')->toArray();
        $dest5 = Destino::where('id',$dest5a)
            ->get(['origen','destino'])
            ->lists('full_destino')->toArray();

        $responsable = Auth::user()->full_name;

        $presupuesto = PresupuestoDia::find($id);
       // dd($presupuesto);
        return view('automotores.presupuestoDia.edit',['presupuesto'=>$presupuesto],compact('responsable','dest1','dest2','dest3','dest4','dest5','destino_id','ruta','viaje','choferes','encargados','vehiculos'));

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
        $presupuesto=PresupuestoDia::find($id);
        $presupuesto->fill($request->all());
        
        $presupuesto->save();
        Session::flash('message','Presupuesto editado correctamente');
        return redirect('presupuestosDia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PresupuestoDia::destroy($id);
        Session::flash('message','Presupuesto Eliminado correctamente');
        return Redirect::to('/presupuestosDia');
    }

    public function getImprimir($id)
    {
        $ide = PresupuestoDia::where('id',$id)
                    ->get(['viaje_id'])->lists('viaje_id')->toArray();
        $ids = $ide[0];
        //dd($ids);
        
        $viaje = Viaje::find($ids);

        $ruta = Ruta::where('viaje_id',$ids)->first();
    
///////////Destinos////////////////////////////////////////
        $destino_i = Ruta::where('viaje_id',$ids)
                ->select('destino_id')->lists('destino_id')->toArray();
        $destino_id = Destino::where('id',$destino_i)
            ->orderBy('id','ASC')
            ->get(['id','origen', 'destino'])
            ->lists('full_destino')->toArray();
        $destino1 = implode(",",$destino_id);
        //dd($destino_id);
        $dest = Ruta::where('viaje_id',$ids)
                ->select('dest1')->lists('dest1')->toArray();
        $dest1 = Destino::where('id',$dest)
            ->orderBy('id','ASC')
            ->get(['id','origen', 'destino'])
            ->lists('full_destino')->toArray();
        $destino2 = implode(",",$dest1);

        $dest2a = Ruta::where('viaje_id',$ids)
                ->select('dest2')->lists('dest2')->toArray();
        $dest2 = Destino::where('id',$dest2a)
            ->orderBy('id','ASC')
            ->get(['id','origen', 'destino'])
            ->lists('full_destino')->toArray();        
        $destino3 = implode(",",$dest2);

        $dest3a = Ruta::where('viaje_id',$ids)
                        ->select('dest3')->lists('dest3')->toArray();
        $dest3 = Destino::where('id',$dest3a)
            ->orderBy('id','ASC')
            ->get(['id','origen', 'destino'])
            ->lists('full_destino')->toArray();
        $destino4 = implode(",",$dest3);

        $dest4a = Ruta::where('viaje_id',$ids)
                        ->select('dest4')->lists('dest4')->toArray();
        $dest4 = Destino::where('id',$dest4a)
            ->orderBy('id','ASC')
            ->get(['id','origen', 'destino'])
            ->lists('full_destino')->toArray();
        $destino5 = implode(",",$dest4);

        $dest5a = Ruta::where('viaje_id',$ids)
                        ->select('dest5')->lists('dest5')->toArray();
        $dest5 = Destino::where('id',$dest5a)
            ->orderBy('id','ASC')
            ->get(['id','origen', 'destino'])
            ->lists('full_destino')->toArray();
        $destino6 = implode(",",$dest5);
        $responsable = Auth::user()->full_name;

        $presupuesto = PresupuestoDia::find($id);
        $date = date('d-m-Y');
        $view =  \View::make('automotores.presupuestoDia.pdf', compact('date', 'presupuesto','destino1','destino2','destino3','destino4','destino5','destino6','ruta','viaje','responsable'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta', 'portrat');
        return $pdf->stream('presupuesto');
    }
}
