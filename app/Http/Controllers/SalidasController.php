<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Vehiculo;
use Infraestructura\User;
use Infraestructura\Salida;
use Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\SalidaCreateRequest;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Auth;

class SalidasController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->salidas = Salida::find($route->getParameter('salidas'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request);
        $salidas = Salida::respo($request->get('respo'))->orderBy('id','DESC')->paginate(10);

        return view('automotores.salidas.index', compact('salidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehiculo = Vehiculo::orderBy('id','DESC')
                ->get(['id','tipog','placa'])
                ->lists('full_vehiculo','id')->toArray();
        //dd($vehiculo);
        $chofer = User::orderBy('id','DESC')
                ->where('tipo','chofer')
                ->get(['id','nombres','apellidos'])
                ->lists('full_name','id')->toArray();
        //dd($chofer);
        return view('automotores.salidas.create', compact('vehiculo','chofer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalidaCreateRequest $request)
    {
        Salida::create($request->all());
        Session::flash('message','Salida creada correctamente...');
        return redirect('salidas');
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
        $salida = Salida::find($id);
        //dd($salida);
        $responsable = Auth::user()->full_name;
        $date = date('d-m-Y');
        $view = \View::make('automotores.salidas.pdf', compact('responsable','date', 'salida'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta', 'portrat');
        return $pdf->stream('salidas');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::orderBy('id','DESC')
                ->get(['id','tipog','placa'])
                ->lists('full_vehiculo','id')->toArray();
        //dd($vehiculo);
        $chofer = User::orderBy('id','DESC')
                ->where('tipo','chofer')
                ->get(['id','nombres','apellidos'])
                ->lists('full_name','id')->toArray();
        //dd($chofer);
        return view('automotores.salidas.edit',['salidas'=>$this->salidas], compact('vehiculo','chofer'));
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
        $this->salidas->fill($request->all());
        $this->salidas->save();
        Session::flash('message','Salida editada correctamente...');
        return redirect('salidas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->salidas->delete();
        Session::flash('message','Salida eliminada correctamente...');
        return redirect('salidas');
    }
}
