<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Rol;
use Infraestructura\User;
use Infraestructura\RolViaje;
use Infraestructura\Excepcion;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Requests\InsertRolViaje;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Auth;
use Illuminate\Routing\Route;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin',['only'=>['create','edit','getImprimir','getGuardar','getExcepcion','getLimpiar','destroy']]);
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->rol = Rol::find($route->getParameter('roles'));
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Auth::user()->tipo == 'mecanico' OR \Auth::user()->tipo == 'encargado') 
        {
            Session::flash('mensaje-rol','Sin privilegios');
            return redirect()->to('acceso');
        }
        $roles = Rol::orderBy('id','ASC')->paginate(15);
       // dd($choferes);
        return view('automotores.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $choferes  = User::where('tipo', 'chofer')
            ->orderBy('nombres','ASC')
            ->get(['id','nombres', 'apellidos'])
            ->lists('full_name','id')->toArray();

        //dd($choferes);
        return view('automotores.roles.create',compact('choferes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // recogemos el id del chofer que quiere entrar
        $idcho = (int)$request['chofer_id'];
        //dd($idcho);
        // comprobamos con cualquier id q este en la base de datos en la tabla roles y si deleted_at esta vacio
        $estaeli = \DB::table('roles')->where('chofer_id',$idcho)->where('deleted_at',null)->get();
        //dd($estaeli);
        foreach($estaeli as $key => $value)
        {
            if(!empty($value) || $value != NULL || $value != "")
            {
                Session::flash('mensaje-rol','El chofer ya está en el rol de viajes!!!');
                return Redirect::to('/roles');
            }
        }
        $esta = \DB::table('roles')->where('chofer_id',$idcho)
                    ->select('deleted_at')->get();
        //dd($esta);
        foreach($esta as $key => $value)
        {
            $i = \DB::table('roles')->where('chofer_id',$idcho)
                    ->select('id')->get();
            $anid = \DB::table('roles')->where('chofer_id',$idcho)
                    ->value('id');
            foreach($i as $key => $value)
            {
                if(!empty($value) || $value != NULL || $value != "")
                {
                    \DB::table('roles')->where('chofer_id',$idcho)->delete();
                }
            }   
            if(!empty($value) || $value != NULL || $value != "")
            {
                $dat = date('Y-m-d h:m:s');
                $ids = \DB::table('roles')->insertGetId([
                    'chofer_id'     => $request['chofer_id'],
                    'created_at'  =>$dat,
                    'updated_at'  =>$dat
                ]);
                //dd($ids);
                Rol::where('id',$ids)->update(['id'=> $anid]);
                Session::flash('message','El chofer volvió al rol de viajes...!!!');
                return Redirect::to('/roles');
            }
        }
        Rol::create([
                    'chofer_id'     => $request['chofer_id'],
                ]);
        Session::flash('message','El chofer fue agregado al rol de viajes');
        return Redirect::to('/roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rolViaje = \DB::table('roles')
        ->join('rolviajes','roles.id','=','rolviajes.rol_id')
        ->where('rolviajes.rol_id',$id)
        ->select('rolviajes.tipoa','rolviajes.tipob','rolviajes.tipoc','rolviajes.fecha')
        ->get();
        //dd($rolViaje);
        return view('automotores.roles.verviaje', compact('rolViaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        return view('automotores.roles.edit',['rol'=>$this->rol]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InsertRolViaje $request, $id)
    {
        $rol = Rol::find($id);
        //$rol->tipo = $request->tipo;
        //Traemos en la variable tip el tipo q se asigno en el formulario
        $tip = $request->tipo;
        //Traemos los tipos de la base de datos si estan llenos o no
        $tipoa = Rol::where('id',$id)
                    ->get(['tipoa'])
                    ->lists('tipoa')
                    ->toArray();

        $tipob = Rol::where('id',$id)
                    ->get(['tipob'])
                    ->lists('tipob')
                    ->toArray();
        
        $tipoc = Rol::where('id',$id)
                    ->get(['tipoc'])
                    ->lists('tipoc')
                    ->toArray();

        //Sacamos cuanto tiene catidad
        $canti = Rol::where('id',$id)
                ->get(['cantidad'])
                ->lists('cantidad')
                ->toArray();
             
        //dd($tipoa);
        //Comprobamos si esta lleno los tres tipos para q le de un mensaje de limpiar
        foreach($tipoa as $key => $valua)
        {
            if(!empty($valua) || $valua != NULL || $valua != "")
            {
                foreach($tipob as $key => $valub)
                {
                    if(!empty($valub) || $valub != NULL || $valub != "")
                    {
                       foreach($tipoc as $key => $valuc)
                        {
                            if(!empty($valuc) || $valuc != NULL || $valuc != "")
                            {
                                Session::flash('mensaje-rol','Limpie los tres tipos de viajes...!!!');
                                return Redirect::to('/roles');
                            }
                        }  
                    }
                }
            }
        }
        // Si es de $tipoa
        if($tip == "ciudad")
        {     
            //Como es array sacamos su valor y verificamos si esta vacio 
            foreach($tipoa as $key => $value)
            {
                //Si no esta vacio mandamos un mensaje q no se puede registrar este tipo de viaje
                if(!empty($value) || $value != NULL || $value != "")
                {
                    Session::flash('mensaje-rol','El tipo de viaje "A" aun esta prohibido para el chofer!!!');
                    return Redirect::to('/roles'); 
                }
                //Registramos el tipo de viaje si esta vacio
                else
                {
                    foreach ($canti as $key => $value) 
                    {
                        $cantidad = ((int)$value) + 1;
                    }
                    Rol::where('id',$id)
                        ->update(['cantidad' => $cantidad]);

                    $rol->tipoa = $request->lugar;
                    $rol->fecha = $request->fecha;
                    $rol->save();
                    Session::flash('message','Se registró el viaje de tipo "A" al chofer');
                    return Redirect::to('/roles');        
                }
            }
        }
        // Si es de $tipoc
        if($tip == "provincia")
        {     
            //Como es array sacamos su valor y verificamos si esta vacio 
            foreach($tipob as $key => $value)
            {
                //Si no esta vacio mandamos un mensaje q no se puede registrar este tipo de viaje
                if(!empty($value) || $value != NULL || $value != "")
                {
                    Session::flash('mensaje-rol','El tipo de viaje "B" aun esta prohibido para el chofer!!!');
                    return Redirect::to('/roles'); 
                }
                //Registramos el tipo de viaje si esta vacio
                else
                {
                    foreach ($canti as $key => $value) 
                    {
                        $cantidad = ((int)$value) + 1;
                    }
                    Rol::where('id',$id)
                        ->update(['cantidad' => $cantidad]);

                    $rol->tipob = $request->lugar;
                    $rol->fecha = $request->fecha;
                    $rol->save();
                    Session::flash('message','Se registró el viaje de tipo "B" al chofer');
                    return Redirect::to('/roles');        
                }
            }
        }
        // Si es de $tipoc
        if($tip == "frontera")
        {     
            //Como es array sacamos su valor y verificamos si esta vacio 
            foreach($tipoc as $key => $value)
            {
                //Si no esta vacio mandamos un mensaje q no se puede registrar este tipo de viaje
                if(!empty($value) || $value != NULL || $value != "")
                {
                    Session::flash('mensaje-rol','El tipo de viaje "C" aun esta prohibido para el chofer!!!');
                    return Redirect::to('/roles'); 
                }
                //Registramos el tipo de viaje si esta vacio
                else
                {
                    foreach ($canti as $key => $value) 
                    {
                        $cantidad = ((int)$value) + 1;
                    }
                    Rol::where('id',$id)
                        ->update(['cantidad' => $cantidad]);

                    $rol->tipoc = $request->lugar;
                    $rol->fecha = $request->fecha;
                    $rol->save();
                    Session::flash('message','Se registró el viaje de tipo "C" al chofer');
                    return Redirect::to('/roles');        
                }
            }
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
        $this->rol->delete();
        Session::flash('message','El chofer fue eliminado del rol de viajes!!!');
        return Redirect::to('/roles');
        
    }
    public function getLimpiar($id)
    {
        $roles = Rol::find($id);

        $tipoa = Rol::where('id',$id)
                    ->get(['tipoa'])
                    ->lists('tipoa')
                    ->toArray();
        foreach($tipoa as $key => $valua)
        {
            if(!empty($valua) || $valua != NULL || $valua != "")
            {
                $tipob = Rol::where('id',$id)
                    ->get(['tipob'])
                    ->lists('tipob')
                    ->toArray();
                foreach($tipob as $key => $valub)
                {
                    if(!empty($valub) || $valub != NULL || $valub != "")
                    {
                        $tipoc = Rol::where('id',$id)
                            ->get(['tipoc'])
                            ->lists('tipoc')
                            ->toArray();   
                        foreach($tipoc as $key => $valuc)
                        {
                            if(!empty($valuc) || $valuc != NULL || $valuc != "")
                            {
                                //Obtenemos el id del rol
                                $ids = Rol::where('id',$id)
                                    ->get(['id'])
                                    ->lists('id')
                                    ->toArray();
                                $idrol = implode($ids);
                                $idroles = (int)$idrol;
                                //dd($idroles);
                                $idcho = Rol::where('id',$id)
                                    ->get(['chofer_id'])
                                    ->lists('chofer_id')
                                    ->toArray();
                                $idcho = implode($idcho);
                                $idchof = (int)$idcho;
                                $dia = date('Y-m-d h:m:s');
                                //Incerto los viajes q realizo cada chofer
                                RolViaje::create([
                                    'chofer' =>$idchof,
                                    'tipoa'=>$valua,
                                    'tipob'=>$valub,
                                    'tipoc'=>$valuc,
                                    'fecha'=>$dia,
                                    'rol_id'=>$idroles
                                ]);

                                //Actualizo los tipos de viaje a cero
                                $tipoa = Rol::where('id',$id)
                                        ->update(['tipoa' => '']);

                                $tipob = Rol::where('id',$id)
                                        ->update(['tipob' => '']);
                                
                                $tipoc = Rol::where('id',$id)
                                        ->update(['tipoc' => '']);

                                $date  = date('Y-m-d h:m:s');
                                $fecha = Rol::where('id',$id)
                                        ->update(['fecha' => $date]); 
                                
                                Session::flash('message','Se guardó y limpió los tres tipos de Viajes');
                                return Redirect::to('/roles');

                            }
                            else
                            {
                                Session::flash('mensaje-rol','Falta asignarle el tipo de viaje "C" al chofer!!!');
                                return Redirect::to('/roles');        
                            }
                        }  
                    }
                    else
                    {
                        Session::flash('mensaje-rol','Falta asignarle el tipo de viaje "B" al chofer!!!');
                        return Redirect::to('/roles');        
                    }
                }
            }
            else
            {
                Session::flash('mensaje-rol','Falta asignarle el tipo de viaje "A" al chofer!!!');
                return Redirect::to('/roles');        
            }
        }
        return Redirect::to('/roles');
    }
    public function getImprimir()
    {
        $roles = \DB::table('roles')
        ->orderBy('id','ASC')
        ->where('deleted_at',null)
        ->select('roles.id','roles.chofer_id','roles.tipoa','roles.tipob','roles.tipoc','roles.fecha','roles.cantidad')
        ->get();
        //dd($roles);
        $responsable = Auth::user()->full_name;
        //dd($responsable);
        
        
        $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
           'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
               'Miercoles', 'Jueves', 'Viernes', 'Sabado');
        $date = $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y');
        /*"Miercoles, 07 de Diciembre de 2016"*/
        //dd($date);
        $view =  \View::make('automotores.roles.pdf', compact('date', 'roles','responsable'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta','portrait')->stream();
        return $pdf->stream('rol_de_viajes');
    }
    public function getExcepcion($id)
    {
        //dd($id);
        $role = Rol::where('id',$id)->get(['id']);
        $i = $role[0]->id;
        //dd($i);
        $rol = Rol::find($i);
        //dd($rol);
        return view('automotores.roles.editare',compact('rol','i'));
    }
    public function getGuardar(Request $request)
    {
        //dd($request);
        Excepcion::create([
                        'chofer_id' =>$request['chofer_id'],
                        'roles_id'  =>$request['roles_id'],
                        'tipo'      =>$request['tipo'],
                        'lugar'     =>$request['lugar'],
                        'fecha'     =>$request['fecha'],
                    ]);
        Session::flash('message','Excepción insertada correctamente!!!');
        return redirect('roles');
    }
    public function getVer($id)
    {
        $excepciones = Excepcion::where('roles_id',$id)->get();
        //dd($excepciones);
        return view('automotores.roles.verexcepcion', compact('excepciones'));
    }
}
