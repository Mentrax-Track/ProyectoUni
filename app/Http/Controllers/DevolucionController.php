<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;

use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Infraestructura\Devolucion;
use Infraestructura\Mecanico;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Auth;

class DevolucionController extends Controller
{
    public function __construct()
    {
        $this->middleware('mecanico',['only'=>['index','create','edit','show','destroy','getImprimir']]);
        
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->devolucion = Devolucion::find($route->getParameter('devolucion'));
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $devolucion = Devolucion::fecha($request->get('fecha'))->orderBy('id','DESC')->paginate(10);
        //dd($devolucion);
        return view('mantenimiento.devoluciones.index', compact('devolucion'));
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
        Devolucion::create($request->all());
        Session::flash('message','Se realizó la devolición.');
        return redirect('devoluciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        $mecanico = Mecanico::find($id);

        return view('mantenimiento.devoluciones.create',compact('mecanico','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inser = Devolucion::where('id',$id)->get(['insertador'])->lists('insertador')->toArray();
        if(Auth::user()->full_name != $inser[0])
        {
            Session::flash('mensaje-rol','Sin privilegios');
            return redirect()->to('acceso');
        }
        //dd($id);
        $insertador = \Auth::user()->full_name;
        $devolucion = Devolucion::find($id);     
        //dd($devolucion);
        $id = $devolucion->mecanico_id;
        return view('mantenimiento.devoluciones.edit',compact('devolucion','insertador','id'));
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
        $devolucion = Devolucion::find($id);
        $devolucion->fill($request->all());
        $devolucion->save();
        Session::flash('message','La devolución fue editada corréctamente!!!');
        return redirect('devoluciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Devolucion::destroy($id);
        Session::flash('message','La devolución fue eliminada correctamente');
        return Redirect::to('/devoluciones');
    }

    public function getImprimir()
    {
        $devolucion = Devolucion::orderBy('fecha','DESC')->get();
        //dd($devolucion);
        $responsable = Auth::user()->full_name;
        //dd($responsable);
        $date = date('d-m-Y');
        //dd($date);
        $view =  \View::make('mantenimiento.devoluciones.pdf', compact('devolucion','date','responsable'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta','portrait')->stream();
        return $pdf->stream('Devoluciones'); 


    }
    public function getImprimiru($id)
    {
        //dd($id);
        $devolucion = Devolucion::find($id);
        //dd($devolucion);
        $responsable = Auth::user()->full_name;
        //dd($responsable);
        $date = date('d-m-Y');
        //dd($date);
        $view =  \View::make('mantenimiento.devoluciones.pdfUno', compact('devolucion','date','responsable'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta','portrait')->stream();
        return $pdf->stream('Devolucion'); 


    }
}
