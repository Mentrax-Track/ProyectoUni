<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Vehiculo;
use Infraestructura\Modelo;
use Infraestructura\Marca;
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
        //$vehiculos = Vehiculo::filtroBusqueda($request->get('tip'), $request->get('esta'));
       // dd($vehiculos);
        /*$vehiculos = \DB::table('vehiculos')
        ->join('modelos','vehiculos.id','=','modelos.vehiculo_id')
        ->join('marcas','modelos.id','=','marcas.modelo_id')
        ->select('vehiculos.id as i','vehiculos.codigo as c',
            .'vehiculos.placa as p','vehiculos.pasajeros as pa',
                ,'modelos.*','marcas.*')
        ->get();*/
        $vehiculos = Vehiculo::placa($request->get('placa'))->estado($request->get('estado'))->orderBy('id','DESC')->paginate(10);
        //dd($vehiculos);
        //$uno = Vehiculo::get(['id']);

        //dd($uno);
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
        //dd($request);

        $model = $request['mantenimiento'];
        //dd($model);
        $dat = date('Y-m-d h:m:s');
        $idvehis = \DB::table('vehiculos')->insertGetId([
                    'codigo' => $request['codigo'],
                    'placa'  => $request['placa'],
                    'color'  => $request['color'],
                    'pasajeros'=> $request['pasajeros'],
                    'tipog'  => $request['tipog'],
                    'estado' => $request['estado'],
                    'created_at'  => $dat,
                    'updated_at'  => $dat
                    ]);

        $idmod = \DB::table('modelos')->insertGetId([
                        'modelo'     =>$request['modelo'],
                        'tipoe'      =>$request['tipoe'],
                        'kilometraje'=>$request['kilometraje'],
                        'vehiculo_id'=>$idvehis,
                        'created_at'  =>$dat,
                        'updated_at'  =>$dat
                    ]); 


        \DB::table('marcas')->insert([
                        'marca'     =>$request['marca'],
                        'chasis'    =>$request['chasis'],
                        'motor'     =>$request['motor'],
                        'cilindrada'=>$request['cilindrada'],
                        'modelo_id' =>$idmod,
                        'created_at'  =>$dat,
                        'updated_at'  =>$dat
                    ]);
        Session::flash('message','Vehículo creado correctamente!!!');
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
        $vehiculos = Vehiculo::find($id);
        //dd($vehiculo);
        $veid = Vehiculo::where('id',$id)->get(['id'])->lists('id')->toArray();
        //dd($veid);
        $modelo = Modelo::where('vehiculo_id',$veid)->get()->first();
        //dd($modelo);
        $vehiid = Modelo::where('vehiculo_id',$id)->get(['id'])->lists('id')->toArray();
        //dd($moid);
        $marca = Marca::where('modelo_id',$vehiid)->get()->first();
        //dd($marca);
        //
        $placa = Vehiculo::where('id',$id)->get(['placa'])->first();
        //dd($placa);
        return view('automotores.vehiculo.detalle', compact('vehiculos','modelo','marca','placa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veid = Vehiculo::where('id',$id)->get(['id'])->lists('id')->toArray();
        //dd($veid);
        $modelo = Modelo::where('vehiculo_id',$veid)->get()->first();
        //dd($modelo);
        $vehiid = Modelo::where('vehiculo_id',$id)->get(['id'])->lists('id')->toArray();
        //dd($moid);
        $marca = Marca::where('modelo_id',$vehiid)->get()->first();
        //dd($marca);
        return view('automotores.vehiculo.edit',['vehi'=>$this->vehi],compact('modelo','marca'));
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
        \DB::table('vehiculos')
            ->where('id', $id)
            ->update([
                'codigo' => $request->codigo,
                'placa'  => $request->placa,
                'color'  => $request->color,
                'pasajeros'=> $request->pasajeros,
                'tipog'  => $request->tipog,
                'estado' => $request->estado
                ]);
        
        \DB::table('modelos')
            ->where('vehiculo_id', $id)
            ->update([
                'modelo' => $request->modelo,
                'tipoe'  => $request->tipoe,
                'kilometraje'  => $request->kilometraje
                ]);
        
        $idmar = Modelo::where('vehiculo_id',$id)->get(['id'])->lists('id')->toArray();
        \DB::table('marcas')
            ->where('modelo_id', $idmar)
            ->update([
                'marca' => $request->marca,
                'chasis'  => $request->chasis,
                'motor'  => $request->motor,
                'cilindrada'  => $request->cilindrada
                ]);

        Session::flash('message','Vehículo editado correctamente!!!');
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
        Session::flash('message','Vehículo eliminado correctamente...');
        return redirect('vehiculos');
    }
}
