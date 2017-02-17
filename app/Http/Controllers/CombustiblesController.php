<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Vehiculo;
use Infraestructura\DetalleCombus;
use Infraestructura\Combustible;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Auth;
use Illuminate\Routing\Route;

class CombustiblesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin',['only'=>['create','edit','index','store','destroy','getImprimir','getImprimire','getGuardar','getMostrar','getLimpiar']]);
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->com = Combustible::find($route->getParameter('combustibles'));
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $combustibles = Combustible::orderBy('id','ASC')->paginate(15);
        //dd($combustibles);
        return view('automotores.combustible.index', compact('combustibles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehiculos  = Vehiculo::where('estado', 'optimo')
            ->orderBy('tipog','ASC')
            ->get(['id','tipog', 'placa'])
            ->lists('full_vehiculo','id')->toArray();

        //dd($choferes);
        return view('automotores.combustible.create',compact('vehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idvehi = (int)$request['vehiculo_id'];
        $estavehi = \DB::table('combustibles')->where('deleted_at',null)->where('vehiculo_id',$idvehi)->get();
        //dd($estaeli);
        foreach($estavehi as $key => $value)
        {
            if(!empty($value) || $value != NULL || $value != "")
            {
                Session::flash('mensaje-rol','El vehículo ya esta en el plan de recarga!!!');
                return Redirect::to('/combustibles');
            }
        }

        Combustible::create([
                    'vehiculo_id'     => $request['vehiculo_id'],
                ]);
        Session::flash('message','El vehículo fue agregado a la recarga de combustible');
        return Redirect::to('/combustibles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //dd($request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $com = Combustible::where('id',$id)->get(['vehiculo_id'])->lists('vehiculo_id')->toArray();
        //dd($com);
        $intve = $com[0];
        //dd($intve);
        $vehiculo = Vehiculo::where('id',$intve)
                            ->get(['id','tipog', 'placa'])
                            ->lists('full_vehiculo','id')->toArray();
        //dd($vehiculo);
        $combustible = Combustible::find($id);
        //dd($combustible);

        $a = $combustible->gasolina;
        $b = $combustible->diesel;
        $c = $combustible->gnv;
        $a = $a.$b.$c;
        //dd($a);
        if(!empty($a) || $a != NULL || $a != "")
        {
            Session::flash('mensaje-rol','Primero GUARDE los datos para la nueva recarga.');
            return Redirect::to('/combustibles');
        }else{
            return view('automotores.combustible.edit',['com'=>$this->com],compact('vehiculo','combustible'));         
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getActualizar($id)
    {
        //dd($id);
        $prueba = Combustible::where('id',$id)->first();
        //dd($prueba);
        $intve = $prueba->vehiculo_id;
        $vehiculo = Vehiculo::where('id',$intve)
                            ->get(['id','tipog', 'placa'])
                            ->lists('full_vehiculo','id')->toArray();
        $a = $prueba->gasolina;
        $b = $prueba->diesel;
        $c = $prueba->gnv;
        $a = $a.$b.$c;
        //dd($a);
        if(!empty($a) || $a != NULL || $a != "")
        {            
            return view('automotores.combustible.editar',compact('prueba','vehiculo'));
        }else{
            Session::flash('mensaje-rol','Inserte porlomenos un dato!!!');
            return redirect('combustibles');
        }
    }
    public function update(Request $request, $id)
    {
        $this->com->fill($request->all());
        $this->com->save();
        Session::flash('message','El combustible fue editado correctamente...');
        return redirect('combustibles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->com->delete();
        Session::flash('message','El vehículo fue eliminado de la recarga');
        return Redirect::to('/combustibles');
    }
    public function getGuardar(Request $request)
    {     
        $id = $request->vehiculo_id;
        
        $a = $request->gasolina;
        $b = $request->diesel;
        $c = $request->gnv;
        $a = $a.$b.$c;
        //dd($a);
        if(!empty($a) || $a != NULL || $a != "")
        {
            Combustible::where('vehiculo_id',$id)
                ->update([
                    'gasolina'=> $request->gasolina,
                    'diesel'=> $request->diesel,
                    'gnv' => $request->gnv,
                    'prega' => $request->prega,
                    'predi' => $request->predi,
                    'pregn' => $request->pregn,
                    'toga' => $request->toga,
                    'todi' => $request->todi,
                    'togn' => $request->togn,
                    'fecha'=>$request->fecha
            ]);
        }else{
            Session::flash('mensaje-rol','Inserte porlomenos un dato!!!');
            return redirect('combustibles');
        }

        Session::flash('message','Se registró la recarga de combustible exitosamente');
        return redirect('combustibles');
    }
    public function getLimpiar($id)
    {
        //dd($id);
        //$id = $request->vehiculo_id;
        //dd($id);        
        $prueba = Combustible::where('id',$id)->first();
        //dd($prueba);
        $a = $prueba->gasolina;
        $b = $prueba->diesel;
        $c = $prueba->gnv;
        $a = $a.$b.$c;
        //dd($a);
        if(!empty($a) || $a != NULL || $a != "")
        {            
            $i = $prueba->id;
            //dd($i);
            $dat = date('Y-m-d h:m:s');
            \DB::table('detallescombus')->insert([
                'vehiculo_id' => $prueba->vehiculo_id, 
                'gasolina' => $prueba->gasolina,
                'diesel'   => $prueba->diesel,
                'gnv'      => $prueba->gnv,
                'prega' => $prueba->prega,
                'predi' => $prueba->predi,
                'pregn' => $prueba->pregn,
                'toga' => $prueba->toga,
                'todi' => $prueba->todi,
                'togn' => $prueba->togn,
                'fecha'    => $prueba->fecha,
                'combustible_id' => $i,
                'created_at'=>$dat,
                'updated_at'=>$dat
                ]);

            Combustible::where('id',$id)
                    ->update([
                        'gasolina' => '',
                        'diesel'   => '',
                        'gnv'      => '',
                        'prega'    => '',
                        'predi'    => '',
                        'pregn'    => '',
                        'toga'     => '',
                        'todi'     => '',
                        'togn'     => '',
                        'fecha'    => $dat
                        ]);
        }else{
            Session::flash('mensaje-rol','Inserte porlomenos un dato!!!');
            return redirect('combustibles');
        }

        Session::flash('message','Se guardó los registros satisfactoriamente');
        return redirect('combustibles');
    }
    public function getMostrar()
    {
        $detalleAhora  = Combustible::where('deleted_at',null)
                    ->orderBy('vehiculo_id','ASC')->paginate(10);
        //dd($detalleAhora);
        $detalle  = DetalleCombus::orderBy('vehiculo_id','ASC')->paginate(10);

        //dd($detalle);
        return view('automotores.combustible.detalle',compact('detalle','detalleAhora'));
    }
    public function getImprimir()
    {

        $detalleAhora  = Combustible::where('deleted_at',null)
                    ->orderBy('vehiculo_id','ASC')->paginate(10);
        //dd($detalleAhora);
        $detalle  = DetalleCombus::orderBy('vehiculo_id','ASC')->paginate(10);
        //dd($detalle);
        $responsable = Auth::user()->full_name;
        
        $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
           'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
               'Miercoles', 'Jueves', 'Viernes', 'Sabado');
        $date = $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y');
        /*"Miercoles, 07 de Diciembre de 2016"*/
        //dd($date);
        //$totalgasolina = Combustible:
        
        $view =  \View::make('automotores.combustible.pdf', compact('date', 'detalleAhora','detalle','responsable'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta','landscape')->stream();
        return $pdf->stream('detalle_combustible');
    }
    public function getImprimire()
    {
        $detalleAhora  = Combustible::where('deleted_at',null)
                    ->orderBy('vehiculo_id','ASC')->paginate(10);
        //dd($detalleAhora);
        $detalle  = DetalleCombus::orderBy('vehiculo_id','ASC')->paginate(10);
        //dd($detalle);
        $responsable = Auth::user()->full_name;
        
        $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
           'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
               'Miercoles', 'Jueves', 'Viernes', 'Sabado');
        $date = $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y');
        /*"Miercoles, 07 de Diciembre de 2016"*/
        //dd($date);
        //$totalgasolina = Combustible:
        
        $view =  \View::make('automotores.combustible.pdf2', compact('date','detalleAhora','responsable'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta','landscape')->stream();
        return $pdf->stream('combustible');
    }
    public function getReporte()
    {
       return view('automotores.reportes.combustibles');
    }
}
