<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Solicitud;
use Infraestructura\Vehiculo;
use Infraestructura\Accesorio;
use Infraestructura\Peticion;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Auth;
class PeticionController extends Controller
{
    public function __construct()
    {
        $this->middleware('mensajero',['only'=>['getImprimir','index','show','edit','store','destroy']]);
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->peticion = Peticion::find($route->getParameter('peticion'));
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        $peticion = Peticion::numero($request->get('numero'))->orderBy('id','DESC')->paginate(10);
       
        return view('mantenimiento.peticion.index', compact('peticion'));
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
        //dd($request);
        Peticion::create($request->all());
        Session::flash('message','Se registró la petición.');
        return redirect('peticion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (\Auth::user()->tipo == 'encargado' || \Auth::user()->tipo == 'mensajero') 
        {
            Session::flash('mensaje-rol','Sin privilegios');
            return redirect()->to('acceso');
        }
        //$solid = $id;
        //dd($solid);
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
        return view('mantenimiento.peticion.create',compact('id','vehiculo','accesorio','solicitud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->tipo == "mensajero")
        {
            Session::flash('mensaje-rol','Sin privilegios');
            return redirect()->to('acceso');
        }

        $inser = Peticion::where('id',$id)->get(['insertador'])->lists('insertador')->toArray();
        if(Auth::user()->full_name != $inser[0])
        {
            Session::flash('mensaje-rol','Sin privilegios');
            return redirect()->to('acceso');
        }


        $insertador = \Auth::user()->full_name;

        $ides = $id;
        $peticion = Peticion::find($id);
        //dd($peticion);     
        $t = $peticion->solicitud_id;
        //dd($t);
        $solicitud = Solicitud::where('id',$t)->first();
        //dd($solicitud);
        $accesorios= Accesorio::where('solicitud_id',$solicitud->id)
                        ->get(['solicitud'])->lists('solicitud')->toArray();
        //dd($accesorios);
        $accesorio = implode($accesorios,' ');
        //dd($mecanico);
        return view('mantenimiento.peticion.edit',compact('peticion','ides','insertador','solicitud','accesorio'));
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
        $peticion = Peticion::find($id);
        $peticion->fill($request->all());
        $peticion->save();
        Session::flash('message','La petición fue editada correctamente');
        return redirect('peticion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peticion::destroy($id);
        Session::flash('message','La petición fue eliminada correctamente');
        return Redirect::to('/peticion');
    }

    public function getImprimir($id)
    {
        //dd($id);
        $peticion = Peticion::find($id);
        //dd($peticion);
        $solicitud = Solicitud::where('id',$peticion->solicitud_id)->first();
        //dd($solicitud);
        $responsable = Auth::user()->full_name;
        //dd($responsable);
        $date = date('d-m-Y');
        //dd($date);
        $view =  \View::make('mantenimiento.peticion.pdf', compact('peticion','solicitud','date','responsable'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta','portrait')->stream();
        return $pdf->stream('Peticiones'); 
    }
}
