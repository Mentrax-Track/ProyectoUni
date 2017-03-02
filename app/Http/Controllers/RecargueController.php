<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Vehiculo;
use Infraestructura\Capital;
use Infraestructura\Recargue;
use Infraestructura\Pedido;
use Infraestructura\Gasolina;
use Infraestructura\Hidrocarburo;
use Infraestructura\Diesel;
use Infraestructura\Gnv;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Auth;
use Illuminate\Routing\Route;
class RecargueController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin',['only'=>['getImprimir','getGuardar','getCapital','create','edit','index','store','destroy','getImprimir','getImprimire','getGuardar','getMostrar','getLimpiar']]);
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->recargue = Recargue::find($route->getParameter('recargues'));
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recargues = Recargue::orderBy('id','ASC')->paginate(15);
        //dd($recargues);
        return view('automotores.recargue.index',compact('recargues'));
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

        return view('automotores.recargue.create',compact('vehiculos'));
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
        $tipo = $request['combustible'];
        //dd($tipo);
        
        $date = date("Y-m-d H:i:s"); 

        $id = \DB::table('recargues')->insertGetId([
            'vehiculo_id' => $request['vehiculo_id'],
            'combustible' => $tipo,
            'factura'     => $request['factura'],
            'fecha'       => $request['fecha'],
            'created_at'  => $date,
            'updated_at'  => $date
        ]);
        if($tipo == "gasolina")
        {
            $idg = \DB::table('gasolina')->insertGetId([
                'litros' => $request['litros'],
                'preciog' => $request['precio'], 
                'totalg' => $request['total'],
                'created_at'  => $date,
                'updated_at'  => $date
            ]); 

            \DB::table('pedidos')->insert([
                'numero'      => $request['numero'],
                'gasolina_id' => $idg,
                'diesel_id'   => null,
                'gnv_id'      => null,
                'recargue_id' => $id,
                'created_at'  => $date,
                'updated_at'  => $date
            ]);
            Session::flash('message','La recarga fue añadida correctamente...!!!');
            return Redirect::to('/recargues');
        }

        if ($tipo == "diesel") 
        {
            $idd = \DB::table('diesel')->insertGetId([
                'litros' => $request['litros'],
                'preciod' => $request['precio'], 
                'totald' => $request['total'],
                'created_at'  => $date,
                'updated_at'  => $date
            ]);


            \DB::table('pedidos')->insert([
                'numero'      => $request['numero'],
                'gasolina_id' => null,
                'diesel_id'   => $idd,
                'gnv_id'      => null,
                'recargue_id' => $id,
                'created_at'  => $date,
                'updated_at'  => $date
            ]);
            Session::flash('message','La recarga fue añadida correctamente...!!!');
            return Redirect::to('/recargues');
        }

        if($tipo == "gnv")
        {
            $idn = \DB::table('gnv')->insertGetId([
                'litros' => $request['litros'],
                'precion' => $request['precio'], 
                'totaln' => $request['total'],
                'created_at'  => $date,
                'updated_at'  => $date
            ]);


            \DB::table('pedidos')->insert([
                'numero'      => $request['numero'],
                'gasolina_id' => null,
                'diesel_id'   => null,
                'gnv_id'      => $idn,
                'recargue_id' => $id,
                'created_at'  => $date,
                'updated_at'  => $date
            ]);
            Session::flash('message','La recarga fue añadida correctamente...!!!');
            return Redirect::to('/recargues');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recargue = Recargue::find($id);
        //dd($recargue);
        $pedido = Pedido::where('recargue_id',$id)->first();
        //dd($pedido);
        $vehiculos  = Vehiculo::where('estado', 'optimo')
            ->orderBy('tipog','ASC')
            ->get(['id','tipog', 'placa'])
            ->lists('full_vehiculo','id')->toArray();

        if ($pedido->gasolina_id != null) 
        {
            $gasolina = Gasolina::where('id',$pedido->gasolina_id)->first();
            //dd($gasolina);
            return view('automotores.recargue.edit',compact('vehiculos','recargue','pedido','gasolina'));
        } 
        if ($pedido->diesel_id != null) 
        {
            $diesel = Diesel::where('id',$pedido->diesel_id)->first();
            //dd($diesel);
            return view('automotores.recargue.edit',compact('vehiculos','recargue','pedido','diesel'));
        } 
        if ($pedido->gnv_id != null) 
        {
            $gnv = Gnv::where('id',$pedido->gnv_id)->first();
            //dd($gnv);
            return view('automotores.recargue.edit',compact('vehiculos','recargue','pedido','gnv'));
        } 
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
        $antes = Recargue::find($id);
        //dd($antes);
        $antepe = Pedido::where('recargue_id',$id)->first();
        //dd($antepe->recargue_id);
        
        $date = date("Y-m-d H:i:s");
        $recargue = Recargue::find($id);
        $recargue->vehiculo_id = $request->vehiculo_id;
        $recargue->factura     = $request->factura;
        $recargue->fecha       = $request->fecha;
        $recargue->combustible = $request->combustible;
        $recargue->save();

        if($request->combustible == "gasolina")
        {
            \DB::table('gasolina')->where('id',$antepe->gasolina_id)->delete();
            
            if($antepe->diesel_id != null)
            {
                \DB::table('diesel')->where('id',$antepe->diesel_id)->delete();
            }
            if($antepe->gnv_id != null)
            {
                \DB::table('gnv')->where('id',$antepe->gnv_id)->delete();
            }

            $idg = \DB::table('gasolina')->insertGetId([
                'litros' => $request->litros,
                'preciog'=> $request->precio,
                'totalg' => $request->total,
                'created_at'=> $date,
                'updated_at'=> $date
            ]);

            Pedido::insert([
                'numero' => $request->numero,
                'gasolina_id'=> $idg,
                'diesel_id'=> null,
                'gnv_id'=> null,
                'recargue_id'=> $id,
                'created_at'=> $date,
                'updated_at'=> $date
            ]);
            
            Session::flash('message','La recarga fue editada correctamente...!!!');
            return redirect('recargues');
        }
        if($request->combustible == "diesel")
        {
            \DB::table('diesel')->where('id',$antepe->diesel_id)->delete();

            if($antepe->gasolina_id != null)
            {
                \DB::table('gasolina')->where('id',$antepe->gasolina_id)->delete();
            }
            if($antepe->gnv_id != null)
            {
                \DB::table('gnv')->where('id',$antepe->gnv_id)->delete();
            }

            $idd = \DB::table('diesel')->insertGetId([
                'litros' => $request->litros,
                'preciod'=> $request->precio,
                'totald' => $request->total,
                'created_at'=> $date,
                'updated_at'=> $date
            ]);

            Pedido::insert([
                'numero' => $request->numero,
                'gasolina_id'=> null,
                'diesel_id'=> $idd,
                'gnv_id'=> null,
                'recargue_id'=> $id,
                'created_at'=> $date,
                'updated_at'=> $date
            ]);

            Session::flash('message','La recarga fue editada correctamente...!!!');
            return redirect('recargues');
        }
        if($request->combustible == "gnv")
        {
            \DB::table('gnv')->where('id',$antepe->gnv_id)->delete();

            if($antepe->gasolina_id != null)
            {
                \DB::table('gasolina')->where('id',$antepe->gasolina_id)->delete();
            }
            if($antepe->diesel_id != null)
            {
                \DB::table('diesel')->where('id',$antepe->diesel_id)->delete();
            }

            $idn = \DB::table('gnv')->insertGetId([
                'litros' => $request->litros,
                'precion'=> $request->precio,
                'totaln' => $request->total,
                'created_at'=> $date,
                'updated_at'=> $date
            ]);
            Pedido::insert([
                'numero' => $request->numero,
                'gasolina_id'=> null,
                'diesel_id'=> null,
                'gnv_id'=> $idn,
                'recargue_id'=> $id,
                'created_at'=> $date,
                'updated_at'=> $date
            ]);
            Session::flash('message','La recarga fue editada correctamente...!!!');
            return redirect('recargues');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recargue = Recargue::find($id);
        //dd($recargue);
        $tipo = $recargue->combustible;
        if($tipo == "gasolina")
        {
            $idg = Pedido::where('recargue_id',$id)->get(['gasolina_id'])->lists('gasolina_id')->toArray();
            \DB::table('pedidos')->where('recargue_id',$id)->delete();
            \DB::table('recargues')->where('id',$id)->delete();
            \DB::table('gasolina')->where('id',$idg[0])->delete();

            Session::flash('message','La recarga fue eliminada exitosamente...!!!');
            return redirect('recargues');
        }
        if($tipo == "diesel")
        {
            $idd = Pedido::where('recargue_id',$id)->get(['diesel_id'])->lists('diesel_id')->toArray();
            //dd($idd[0]);
            \DB::table('pedidos')->where('recargue_id',$id)->delete();
            \DB::table('recargues')->where('id',$id)->delete();
            \DB::table('diesel')->where('id',$idd[0])->delete();

            Session::flash('message','La recarga fue eliminada exitosamente...!!!');
            return redirect('recargues');
        }
        if($tipo == "gnv")
        {
            $idn = Pedido::where('recargue_id',$id)->get(['gnv_id'])->lists('gnv_id')->toArray();
            //dd($idd[0]);
            \DB::table('pedidos')->where('recargue_id',$id)->delete();
            \DB::table('recargues')->where('id',$id)->delete();
            \DB::table('gnv')->where('id',$idn[0])->delete();
            
            Session::flash('message','La recarga fue eliminada exitosamente...!!!');
            return redirect('recargues');
        }
        
    }
    public function getImprimir()
    {
        $recargues = Recargue::orderBy('id','ASC')->paginate(15);
        //dd($recargues);
       /* return view('automotores.recargue.index',compact('recargues'));

        $detalleAhora  = Combustible::where('deleted_at',null)
                    ->orderBy('vehiculo_id','ASC')->paginate(10);
        //dd($detalleAhora);
        $detalle  = DetalleCombus::orderBy('vehiculo_id','ASC')->paginate(10);
        //dd($detalle);*/
        $responsable = Auth::user()->full_name;
        
        $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
           'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
               'Miercoles', 'Jueves', 'Viernes', 'Sabado');
        $date = $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y');
        /*"Miercoles, 07 de Diciembre de 2016"*/
        //dd($date);
        //$totalgasolina = Combustible:
        
        $view =  \View::make('automotores.recargue.pdf', compact('date','responsable', 'recargues'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta','portrait')->stream();
        return $pdf->stream('Recarga_Combustible');
    }
    public function getGuardar()
    {
        $recargas = Recargue::get();
        //dd($recargas);
        //***//
        $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
           'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
               'Miercoles', 'Jueves', 'Viernes', 'Sabado');
        $date = $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y');
        //**//
        $cag = 0; $cad = 0; $can = 0;
        foreach ($recargas as $key => $value) 
        {
            //dd($value);
            $pedido = Pedido::where('recargue_id',$value->id)->first();
            //dd($pedido);
            $tipo = $value->combustible;
            //dd($tipo);
            if($tipo == "gasolina")
            {
                $idg = Pedido::where('recargue_id',$value->id)->get(['gasolina_id'])->lists('gasolina_id')->toArray();
                //dd($idg);
                $gasolina = Gasolina::where('id',$idg[0])->first();
                //dd($gasolina);
                
                Hidrocarburo::create([
                    'npedido'    => $pedido->numero,
                    'fecha'      => $value->fecha,
                    'factura'    => $value->factura,
                    'vehiculo'   => $value->vehiculo_id,
                    'combustible'=> $value->combustible,
                    'gasolina'   => $pedido->gasolina_id,
                    'diesel'     => $pedido->diesel_id,
                    'gnv'        => $pedido->gnv_id,
                    'litros'     => $gasolina->litros,
                    'precio'     => $gasolina->preciog,
                    'total'      => $gasolina->totalg,
                    'fecha_recargue'=> $date
                ]);

                $cag = $cag+$gasolina->totalg;

            }
            if($tipo == "diesel")
            {
                $idd = Pedido::where('recargue_id',$value->id)->get(['diesel_id'])->lists('diesel_id')->toArray();
                //dd($idg);
                $diesel = Diesel::where('id',$idd[0])->first();
                //dd($gasolina);
                
                Hidrocarburo::create([
                    'npedido'    => $pedido->numero,
                    'fecha'      => $value->fecha,
                    'factura'    => $value->factura,
                    'vehiculo'   => $value->vehiculo_id,
                    'combustible'=> $value->combustible,
                    'gasolina'   => $pedido->gasolina_id,
                    'diesel'     => $pedido->diesel_id,
                    'gnv'        => $pedido->gnv_id,
                    'litros'     => $diesel->litros,
                    'precio'     => $diesel->preciod,
                    'total'      => $diesel->totald,
                    'fecha_recargue'=> $date
                ]);

                $cad = $cad+$diesel->totald;

            }
            if($tipo == "gnv")
            {
                $idn = Pedido::where('recargue_id',$value->id)->get(['gnv_id'])->lists('gnv_id')->toArray();
                //dd($idg);
                $gnv = Gnv::where('id',$idn[0])->first();
                //dd($gasolina);
                
                Hidrocarburo::create([
                    'npedido'    => $pedido->numero,
                    'fecha'      => $value->fecha,
                    'factura'    => $value->factura,
                    'vehiculo'   => $value->vehiculo_id,
                    'combustible'=> $value->combustible,
                    'gasolina'   => $pedido->gasolina_id,
                    'diesel'     => $pedido->diesel_id,
                    'gnv'        => $pedido->gnv_id,
                    'litros'     => $gnv->litros,
                    'precio'     => $gnv->precion,
                    'total'      => $gnv->totaln,
                    'fecha_recargue'=> $date
                ]);

                $can = $can+$gnv->totaln;

            }
        }
        \DB::table('pedidos')->delete();
        \DB::table('recargues')->delete();
        \DB::table('gasolina')->delete();
        \DB::table('diesel')->delete();
        \DB::table('gnv')->delete();


        $capital = Capital::all();
        $capital = $capital->last();
        $re = $cag+$cad+$can;
        $to = $capital->total-$re;
        Capital::create([
            'hay'    => $capital->total,
            'monto'  => $re,
            'total'  => $to,
            'fecha'  => $date
            ]);

        Session::flash('message','La recarga fue almacenada exitosamente...!!!');
        return redirect('recargues');
    }
    public function getCapital()
    {
        $capital = Capital::all();
        //dd($capital);
        //dd($capital->last());
        $capital = $capital->last();
        //dd($capital);
        return view('automotores.recargue.capital',compact('capital'));
    }
}





