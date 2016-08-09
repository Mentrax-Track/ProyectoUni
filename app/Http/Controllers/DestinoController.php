<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Destino;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Infraestructura\Http\Requests\DestinoCreateRequest;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class DestinoController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->des = Destino::find($route->getParameter('destinos'));
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $destinos = Destino::ruta($request->get('ruta'))->dep($request->get('dep'))->orderBy('id','DESC')->paginate(10);
        return view('automotores.destino.index', compact('destinos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('automotores.destino.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DestinoCreateRequest $request)
    {
        Destino::create($request->all());
        Session::flash('message','Destino insertado correctamente...');
        return redirect('destinos');
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
        return view('automotores.destino.edit',['des'=>$this->des]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DestinoCreateRequest $request, $id)
    {
        $this->des->fill($request->all());
        $this->des->save();
        Session::flash('message','Destino Editado correctamente...');
        return redirect('destinos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->des->delete();
        Session::flash('message','Destino Eliminado correctamente...');
        return redirect('destinos');
    }
}
