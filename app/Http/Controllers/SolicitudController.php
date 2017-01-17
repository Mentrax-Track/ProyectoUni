<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Http\Requests\SolicitudCreateRequest;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Infraestructura\User;
use Infraestructura\Vehiculo;
use Infraestructura\Solicitud;
use Infraestructura\Accesorio;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Auth;

class SolicitudController extends Controller
{
    public function __construct()
    {
        $this->middleware('informe',['only'=>['create','edit','index']]);
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->sol = Solicitud::find($route->getParameter('solicitudes'));
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = Solicitud::orderBy('id','DESC')->paginate(10);
        //dd($solicitudes);
        return view('mantenimiento.solicitudes.index', compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chofer = User::where('tipo','chofer')
                    ->get(['id','nombres','apellidos'])
                    ->lists('full_name','id')
                    ->toArray();
        //dd($chofer);
        $vehiculo = Vehiculo::where('estado','optimo')
                    ->get(['id','placa','tipog'])
                    ->lists('full_vehiculo','id')
                    ->toArray();
        //dd($vehiculo);
        return view('mantenimiento.solicitudes.create', compact('chofer','vehiculo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolicitudCreateRequest $request)
    {
        $model = $request['solicitud'];
        //dd($model);
        $dat = date('Y-m-d h:m:s');
        $date= date('Y-m-d');
        $chofer = Auth::user()->full_name;
        $idsoli = \DB::table('solicitudes')->insertGetId([
            'chofer'      => $chofer,
            'descripsoli' => $request['descripsoli'],
            'fecha'       => $date,
            'vehiculo_id' => $request['vehiculo_id'],
            'created_at'  =>$dat,
            'updated_at'  =>$dat
        ]);
        foreach ($model as $key => $value) {
            \DB::table('accesorios')->insert([
                'solicitud'   =>$value,
                'solicitud_id'=>$idsoli,
                'created_at'  =>$dat,
                'updated_at'  =>$dat
            ]);
        }
        Session::flash('message','Solicitud creada correctamente... Puede imprimirla');
        return redirect('solicitudes');
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
        $cho = Auth::user()->full_name;
        //dd($cho);
        $sol = Solicitud::where('id',$id)->get(['chofer'])
            ->lists('chofer')->toArray();
        $sole = implode ( $sol );
        //dd($sole);
        if ($cho != $sole) 
        {
            Session::flash('mensaje-rol','Sin privilegios');
            return redirect()->to('acceso');
        }

        $vehiculo = Vehiculo::where('estado','optimo')
                    ->get(['id','placa','tipog'])
                    ->lists('full_vehiculo','id')
                    ->toArray();
        $accesorios= Accesorio::where('solicitud_id',$id)
                        ->get(['solicitud'])->lists('solicitud')->toArray();
        //dd($accesorios);
        return view('mantenimiento.solicitudes.edit',['sol'=>$this->sol],compact('vehiculo','accesorios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SolicitudCreateRequest $request, $id)
    {
        $solicitud = Solicitud::find($id);
        $solicitud->fill($request->all());
        //dd($solicitudes);

        Accesorio::where('solicitud_id',$id)
                    ->delete();
        $mod = $request['solicitud'];
        //dd($mod);
        $dat = date('Y-m-d h:m:s');
        foreach ($mod as $key => $value) {
            \DB::table('accesorios')->insert([
                'solicitud'    =>$value,
                'solicitud_id'=>$id,
                'created_at'  =>$dat,
                'updated_at'  =>$dat
            ]);
        }
        //dd($infovehi);
        $solicitud->save();
        Session::flash('message','La solicitud fue editada correctamente');
        return redirect('solicitudes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Solicitud::destroy($id);
        Session::flash('message','La solicitud fue Eliminado correctamente');
        return Redirect::to('/solicitudes');
    }
}
