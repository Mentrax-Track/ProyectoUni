<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Kilomecanico;
use Infraestructura\Modelo;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Auth;
use Illuminate\Routing\Route;
class KilomecanicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $modelo = Modelo::where('vehiculo_id',$request->vehiculo_id)->first();
        //dd($modelo);
        
        Kilomecanico::create([
            'vehiculo_id' => $request->vehiculo_id,
            'hay'         => $request->hay,
            'aumento'     => $request->aumento,
            'total'       => $request->total,
            'mecanico_id'  => $request->mecanico_id
        ]);

        Modelo::where('vehiculo_id',$request->vehiculo_id)
          ->update(['kilometraje' => $request->total,]);

        Session::flash('message','Kilometraje actualizado correctamente...');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
