<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Mapa;
use Infraestructura\Http\Requests\MapaCreateRequest;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Auth;
class MapaController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->mapa = Mapa::find($route->getParameter('mapas'));
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapas = Mapa::orderBy('id', 'DESC')->paginate(12);
        return view('automotores.mapas.index', compact('mapas'));
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
    public function store(MapaCreateRequest $request)
    {
        //dd($request);
        Mapa::create($request->all());
        Session::flash('message','La ubicación fue añadida corréctamente!!!');
        return redirect('mapas');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insertador = \Auth::user()->full_name;
        //dd($insertador);
        $ides = $id;
        //dd($ides);
        return view('automotores.mapas.create',compact('ides','insertador'));
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
        $mapa = Mapa::find($id);
        return view('automotores.mapas.edit',compact('mapa','ides','insertador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MapaCreateRequest $request, $id)
    {
        $this->mapa->fill($request->all());
        $this->mapa->save();
        Session::flash('message','Ubicación fue editado corréctamente!!!');
        return redirect('mapas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->mapa->delete();
        Session::flash('message','Ubicación fue Eliminado corréctamente!!!');
        return redirect('mapas');
    }
    public function getVer($id)
    {
        $mapa = Mapa::find($id);
        return view('automotores.mapas.ver',compact('mapa'));
    }
}
