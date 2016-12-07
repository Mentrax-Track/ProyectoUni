<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Presupuesto;
use Infraestructura\PresupuestoDia;
use Infraestructura\Viaje;
use Infraestructura\User;
use Infraestructura\Ruta;
use Infraestructura\Vehiculo;
use Infraestructura\Destino;
use Infraestructura\InformeViaje;
use Infraestructura\InfoDebolucion;
use Infraestructura\InfoVehi;
use Infraestructura\InfoViaje;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Requests\CreateInformeRequest;
use Infraestructura\Http\Controllers\Controller;

use Session;
use Redirect;
use Illuminate\Routing\Route;
use Auth;
class InformeController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);

    }
    public function find(Route $route)
    {
        $this->informes   = InformeViaje::find($route->getParameter('informes'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminateq\Http\Response
     */
    public function index(Request $request)
    {
        $informeviajes = InformeViaje::entidad($request->get('entidad'))->orderBy('id','ASC')->paginate(10);
        return view('automotores.informe.index',compact('informeviajes'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('automotores.informe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInformeRequest $request)
    {

        //dd($request);
        $model = $request['mantenimiento'];
        //dd($model);
        $dat = date('Y-m-d h:m:s');
        $idinviajes = \DB::table('informesviajes')->insertGetId([
                    ///$dat = date('Y-m-d h:m:s');
                    'vehiculo' => $request['vehiculo'],
                    'chofer'   => $request['chofer'],
                    'encargado'=> $request['encargado'],
                    'entidad'  => $request['entidad'],
                    'fechapartida'=> $request['fechapartida'],
                    'kilopartida' => $request['kilopartida'],
                    'tiempopartida'=> $request['tiempopartida'],
                    'fechallegada' => $request['fechallegada'],
                    'kilollegada'  => $request['kilollegada'],
                    'tiempollegada'=> $request['tiempollegada'],
                    'viaticoa'     => $request['viaticoa'],
                    'viaticob'     => $request['viaticob'],
                    'viaticoc'     => $request['viaticoc'],
                    'pasajeros'    => $request['pasajeros'],
                    'kmtotal'      => $request['kmtotal'],
                    'dias'         => $request['dias'],
                    'recargue1'    => $request['recargue1'],
                    'compra1'      => $request['compra1'],
                    'recargue2'    => $request['recargue2'],
                    'compra2'      => $request['compra2'],
                    'recargue3'    => $request['recargue3'],
                    'compra3'      => $request['compra3'],
                    'descripe'     => $request['descripe'],
                    'montope'      => $request['montope'],
                    'montoim'      => $request['montoim'],
                    'totalpeim'    => $request['totalpeim'],
                    'delegacion'   => $request['delegacion'],
                    'recomendacion'=> $request['recomendacion'],
                    'descripmante' => $request['descripmante'],
                    'combustotalu' => $request['combustotalu'],
                    'combustotalco' => $request['combustotalco'],
                    
                    'created_at'  =>$dat,
                    'updated_at'  =>$dat
                ]);
        
        \DB::table('infoviaje')->insert([
            'viaje_id' => $request['viaje_id'],
            'informeviaje_id' => $idinviajes,
            'created_at'  =>$dat,
            'updated_at'  =>$dat
        ]);
        \DB::table('informesdebolu')->insert([
            'combus'=> $request['combus'],
            'peaje' => $request['peaje'],
            'impre' => $request['impre'],
            'totalcopeim'      => $request['totalcopeim'],
            'informesviaje_id' => $idinviajes,
            'created_at'  =>$dat,
            'updated_at'  =>$dat
        ]);

        foreach ($model as $key => $value) {
            \DB::table('informesvehi')->insert([
                'mantenimiento'    =>$value,
                'informesviaje_id'=>$idinviajes,
                'created_at'  =>$dat,
                'updated_at'  =>$dat
            ]);
        }

        Session::flash('message','El informe del vijae fue creado correctamente...');
        return Redirect::to('/informes');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ids = (int)$id;
        //dd($ids);

        $viaje = Viaje::find($ids);
        //dd($viaje);
        $presupuesto = Presupuesto::where('viaje_id',$ids)->first();
        //dd($presupuesto);
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
                    ->lists('full_destino','id')
                    ->toArray();

        $kmtotal   = Ruta::where('viaje_id',$ids)
                    ->get(['total'])
                    ->lists('total')
                    ->toArray();
        //dd($ruta);

        return view('automotores.informe.create', compact('viaje','presupuesto','encargados','choferes','vehiculos','destino','kmtotal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infovi = InfoViaje::where('informeviaje_id',$id)
                    ->get(['viaje_id'])->lists('viaje_id')->toArray();

        $ids = (int)$infovi[0];
        //dd($ids);

        $informesdebolu = InfoDebolucion::where('informesviaje_id',$id)->first();
        //dd($informesdebolu);
        
        $mantenimiento = InfoVehi::where('informesviaje_id',$id)
                        ->get(['mantenimiento'])->lists('mantenimiento')->toArray();
        //dd($mantenimiento);
        $viaje = Viaje::find($ids);
        //dd($viaje);
        $presupuesto = Presupuesto::where('viaje_id',$ids)->first();
        //dd($presupuesto);
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
                    ->lists('full_destino','id')
                    ->toArray();

        $kmtotal   = Ruta::where('viaje_id',$ids)
                    ->get(['total'])
                    ->lists('total')
                    ->toArray();

        return view('automotores.informe.edit',['informes'=>$this->informes],compact('presupuesto','encargados','choferes','vehiculos','destino','kmtotal','viaje','informesdebolu','mantenimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateInformeRequest $request, $id)
    {
        $informes=InformeViaje::find($id);
        $informes->fill($request->all());
        //dd($informes);

        $infodebolu=InfoDebolucion::find($id);
        $infodebolu->fill($request->all());
        //dd($infodebolu);

        InfoVehi::where('informesviaje_id',$id)
                    ->delete();
        $mod = $request['mantenimiento'];
        //dd($mod);
        $dat = date('Y-m-d h:m:s');
        foreach ($mod as $key => $value) {
            \DB::table('informesvehi')->insert([
                'mantenimiento'    =>$value,
                'informesviaje_id'=>$id,
                'created_at'  =>$dat,
                'updated_at'  =>$dat
            ]);
        }
        //dd($infovehi);
        $informes->save();
        $infodebolu->save();
        Session::flash('message','El informe fue editado correctamente');
        return redirect('informes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        InformeViaje::destroy($id);
        InfoDebolucion::destroy($id);
        InfoVehi::destroy($id);
        Session::flash('message','El informe fue Eliminada correctamente');
        return Redirect::to('/informes');
    }
    public function getPresudia($id)
    {
        $ids = (int)$id;
        //dd($ids);

        $viaje = Viaje::find($ids);
        //dd($viaje);
        $presupuesto = PresupuestoDia::where('viaje_id',$ids)->first();
        //dd($presupuesto);
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
                    ->lists('full_destino','id')
                    ->toArray();

        $kmtotal   = Ruta::where('viaje_id',$ids)
                    ->get(['total'])
                    ->lists('total')
                    ->toArray();
        //dd($ruta);

        return view('automotores.informe.createinfob', compact('viaje','presupuesto','encargados','choferes','vehiculos','destino','kmtotal'));

    }

    public function getImprimir($id)
    {
        //dd($id);
        $informe = InformeViaje::find($id);
        //dd($informe);

        $iddevolu = InfoDebolucion::where('informesviaje_id',$id)
                    ->get(['id']);
        //dd($iddevolu);
        $debolu = InfoDebolucion::find($id);
        //dd($debolu);          
        $vehiculo = InfoVehi::where('informesviaje_id',$id)
                    ->get(['mantenimiento'])
                    ->lists('mantenimiento')
                    ->toArray();
        //dd($vehiculo);
        //dd($deboluciones);
        $date = date('d-m-Y');
        $view =  \View::make('automotores.informe.pdf', compact('date', 'informe','debolu','vehiculo','date'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta', 'portrat');
        return $pdf->stream('informe de viaje');
    }

}
