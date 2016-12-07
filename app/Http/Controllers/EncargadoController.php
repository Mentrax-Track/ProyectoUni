<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\User;
use Infraestructura\Entidad;
use Infraestructura\Http\Requests\UserCreateEncargadoRequest;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
class EncargadoController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->user = User::find($route->getParameter('encar'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::name($request->get('name'))->tipo($request->get('tipo'))->orderBy('id','DESC')->paginate(10);


        $entidad = \DB::table('entidades')
            ->join('users', 'entidades.user_id', '=', 'users.id')
            ->select('entidades.*')
            ->get();
        //  dd($entidad);

        return view('automotores.usuarios.index', compact('users','entidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('automotores.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateEncargadoRequest $request)
    {
        //dd($request);
        //User::create($request->all());
        $insertador = \Auth::user()->full_name;
        $dat = date('Y-m-d h:m:s');
        $iduser = \DB::table('users')->insertGetId([
                    'nombres'   => $request['nombres'],
                    'apellidos' => $request['apellidos'],
                    'celular'   => $request['celular'],
                    'email'     => $request['email'],
                    'tipo'      => 'encargado',
                    'insertador'=> $insertador,
                    'password'  => bcrypt($request['password']),
                    'created_at'=>$dat,
                    'updated_at'=>$dat
                ]);

        $cedu = $request->cedula;
        if (!empty($cedu)) 
        {
            User::where('id',$iduser)
                ->update(['cedula' => $cedu ]);   
        }
        


        \DB::table('entidades')->insert([  
            'facultad' => $request['facultad'],
            'carrera'  => $request['carrera'],
            'materia'  => $request['materia'],
            'sigla'    => $request['sigla'],
            'user_id'  => $iduser,
            'created_at'=>$dat,
            'updated_at'=>$dat
        ]);

        Session::flash('message','Usuario encargado creado correctamente...');
        return redirect('users');
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
        $user = User::find($id);
        return view('automotores.usuarios.edit',['user'=>$user]);
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
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario encargado editado correctamente...');
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('message','Usuario encargado eliminado correctamente...');
        return redirect('users');
    }
}
