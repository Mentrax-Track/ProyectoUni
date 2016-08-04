<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Vehiculo;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Requests\VehiculoCreateRequest;
use Infraestructura\Http\Requests\VehiculoUpdateRequest;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
class VehiculosController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->vehi = Vehiculo::find($route->getParameter('vehiculos'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vehiculos = Vehiculo::filtroBusqueda($request->get('tip'), $request->get('esta'));

        return view('automotores.vehiculo.index', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('automotores.vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculoCreateRequest $request)
    {
        Vehiculo::create($request->all());
        Session::flash('message','Vehiculo creado correctamente...');
        return redirect('vehiculos');
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
        return view('automotores.vehiculo.edit',['vehi'=>$this->vehi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehiculoUpdateRequest $request, $id)
    {
        $this->vehi->fill($request->all());
        $this->vehi->save();
        Session::flash('message','Vehiculo editado correctamente...');
        return redirect('vehiculos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->vehi->delete();
        Session::flash('message','Vehiculo eliminado correctamente...');
        return redirect('vehiculos');
    }
}
