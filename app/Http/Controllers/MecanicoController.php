<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;

use Infraestructura\Http\Requests;
use Infraestructura\Http\Requests\CreateMecanicoRequest;
use Infraestructura\Http\Controllers\Controller;
use Infraestructura\Solicitud;
use Infraestructura\Vehiculo;
use Infraestructura\Accesorio;
use Infraestructura\Mecanico;
use Infraestructura\User;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Auth;

class MecanicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('mecanico',['only'=>['create','edit','show','destroy','getImprimir']]);
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->mecanico = Mecanico::find($route->getParameter('mecanico'));
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Auth::user()->tipo == 'encargado') 
        {
            Session::flash('mensaje-rol','Sin privilegios');
            return redirect()->to('acceso');
        }
        $mecanico = Mecanico::orderBy('id','DESC')->paginate(10);
        return view('mantenimiento.mecanico.index', compact('mecanico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $solicitudes = Solicitud::chofer($request->get('chofer'))->vehiculo_id($request->get('vehiculo_id'))->orderBy('id','DESC')->paginate(10);
        //dd($solicitudes);
            
        $chofer = User::where('tipo','chofer')
            ->get(['nombres','apellidos','id'])
            ->lists('full_name','full_name')
            ->toArray();

        $vehiculo_id = Vehiculo::get(['tipog','placa','id'])->lists('full_vehiculo','id')->toArray();
        return view('mantenimiento.mecanico.create', compact('solicitudes','chofer','vehiculo_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mecanico::create($request->all());
        Session::flash('message','Se inserto el trabajo correctamente.');
        return redirect('mecanicos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = Vehiculo::where('estado','optimo')
                    ->get(['id','placa','tipog'])
                    ->lists('full_vehiculo','id')
                    ->toArray();
        $solicitud = Solicitud::find($id);
        $accesorios= Accesorio::where('solicitud_id',$id)
                        ->get(['solicitud'])->lists('solicitud')->toArray();
        //dd($accesorios);
        $accesorio = implode($accesorios,' ');
        //dd($accesorio);

        return view('mantenimiento.mecanico.concretar',compact('vehiculo','accesorio','solicitud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insertador = \Auth::user()->full_name;
        $ides = $id;
        $mecanico = Mecanico::find($id);     
        //dd($mecanico);
        return view('mantenimiento.mecanico.edit',compact('mecanico','ides','insertador'));
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
        $mecanico = Mecanico::find($id);
        $mecanico->fill($request->all());
        $mecanico->save();
        Session::flash('message','El trabajo fue editado corréctamente!!!');
        return redirect('mecanicos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mecanico::destroy($id);
        Session::flash('message','El trabajo fue Eliminado correctamente');
        return Redirect::to('/mecanicos');
    }
    public function getImprimir()
    {
        $solicitudes = Solicitud::orderBy('chofer','DESC')->get();
        //dd($Solicitudes);
        $responsable = Auth::user()->full_name;
        //dd($responsable);
        $date = date('d-m-Y');
        //dd($date);
        $view =  \View::make('mantenimiento.mecanico.pdf', compact('solicitudes','date','responsable'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta','portrait')->stream();
        return $pdf->stream('Solicitudes');  
    }
}
