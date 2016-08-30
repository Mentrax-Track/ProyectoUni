<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\User;
use Infraestructura\Reserva;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Requests\ReservaCreateRequest;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
class ReservasController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);

    }
    public function find(Route $route)
    {
        $this->user = User::find($route->getParameter('user'));
        $this->reserva = Reserva::find($route->getParameter('reservas','user'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reserva = Reserva::enti($request->get('enti'))->orderBy('id','DESC')->paginate(10);
        return view('automotores.reservas.index',compact('reserva'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        $user = User::where('tipo', 'encargado')
            ->get(['id', 'nombres', 'apellidos'])->lists('full_name','id');
        //dd($user);

        return view('automotores.reservas.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservaCreateRequest $request)
    {
        $a = strtotime($request['fecha_inicial']);
        $b = strtotime($request['fecha_final']);
        if($a > $b)
        {
            Session::flash('message-error','La fecha Inicial no debe ser mayor a la fecha Final');   
            return Redirect::to('/reservas/create');          
        }
        $diferencia = abs(strtotime($request['fecha_final']) - strtotime($request['fecha_inicial']));

        $years  = floor($diferencia / (365*60*60*24));
        $months = floor(($diferencia - $years * 365*60*60*24) / (30*60*60*24));
        $days   = floor(($diferencia - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));


        Reserva::create([
            'entidad'       => $request['entidad'],
            'objetivo'      => $request['objetivo'],
            'pasajeros'     => $request['pasajeros'],
            'fecha_inicial' => $request['fecha_inicial'],
            'fecha_final'   => $request['fecha_final'],
            'dias'          => $days,
            'user_id'       => $request['encargado'],
            ]);
      //  dump($request['encargado']);
        Session::flash('message','Reserva creada correctamente');
        return Redirect::to('/reservas');
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
        $user = User::lists('nombres','id');
        
        return view('automotores.reservas.edit',['reser'=>$this->reserva],compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservaCreateRequest $request, $id)
    {
        $user = User::lists('nombres','id');         
        $this->reserva->fill($request->all());
        $this->reserva->save();
        Session::flash('message','La reserva fue editada correctamente');
        return Redirect::to('/reservas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::lists('nombres','id'); 
        $this->reserva->delete();
        Session::flash('message','La reserva fue Eliminada correctamente');
        return Redirect::to('/reservas');
    }
}
