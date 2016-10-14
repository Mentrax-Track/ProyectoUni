<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Rol;
use Infraestructura\User;

use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class RolesController extends Controller
{
    public function __construct()
    {
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
        Rol::create([
            'chofer_id'     => $request['chofer_id'],
            ]);
      //  dump($request['encargado']);
        Session::flash('message','El chofer fue introducido al rol de viajes');
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
    public function update(Request $request, $id)
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
        //dd($tipoa);
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

        
    }
    public function getLimpiar($id)
    {
        $roles = Rol::find($id);

        $completo = Rol::where('id',$id)
                    ->get(['completo'])
                    ->lists('completo')
                    ->toArray();

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
                                //Concateno los tres tipos de viajes llenos
                                $complet = "1:".$valua." 2:".$valub." 3:".$valuc;
                                //los concatenos con los que habian para cuardarlo en uno
                                $com = Rol::where('id',$id)
                                    ->get(['completo'])
                                    ->lists('completo')
                                    ->toArray();
                                //convierto de array a string
                                $completo = implode($com);
                                $resultado= $completo." - ".$complet; 
                                $completo = Rol::where('id',$id)
                                            ->update(['completo' => $resultado]);
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
                                
                                Session::flash('message','Se guardo y limpió los tres tipos de Viajes');
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
}
