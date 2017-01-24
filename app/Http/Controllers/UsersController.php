<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\User;
use Infraestructura\Entidad;
use Infraestructura\Http\Requests\UserCreateRequest;
use Infraestructura\Http\Requests\UserUpdateRequest;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Auth;
class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin',['only'=>['create','edit','index','store','destroy','getImpresiones','getChoferes','getTodos','getMecanicos','getEncargados']]);
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->user = User::find($route->getParameter('users'));
        $this->notFound($this->user);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*Para que solo muestre los elementos eliminados
           $users = User::onlyTrashed()->paginate(3); */    
        //$users = User::orderBy('id','DESC')->paginate();

        $users = User::name($request->get('name'))->tipo($request->get('tipo'))->orderBy('id','DESC')->paginate(10);


        $entidad = \DB::table('entidades')
            ->join('users', 'entidades.user_id', '=', 'users.id')
            ->select('entidades.*')
            ->get();
        //dd($entidad);

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
    public function store(UserCreateRequest $request)
    {
        //dd($request);
        //User::create($request->all());
        
        $insertador = Auth::user()->full_name;
        $dat = date('Y-m-d h:m:s');
        $iduser = \DB::table('users')->insertGetId([
                    'nombres'   => $request['nombres'],
                    'apellidos' => $request['apellidos'],
                    'cedula'    => $request['cedula'],
                    'celular'   => $request['celular'],
                    'email'     => $request['email'],
                    'tipo'      => $request['tipo'],
                    'insertador'=> $insertador,
                    'password'  => bcrypt($request['password']),
                    'created_at'=>$dat,
                    'updated_at'=>$dat
                ]);

        Session::flash('message','Usuario creado correctamente');
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
        $entidad = Entidad::where('user_id',$id)
        ->first();
       //dd($entidad);
        if(!empty($entidad) || $entidad != NULL || $entidad != "")
        {
            return view('automotores.usuarios.edit',['user'=>$this->user],compact('entidad'));
        }else{
            $entidad = User::find($id);
            return view('automotores.usuarios.edit',['user'=>$this->user],compact('entidad'));    
        }

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        //dd($request);
        //$reservas=Reserva::find($id);
        $yo = \Auth::user()->full_name;
        $user = User::find($id);
        $user->nombres = $request->nombres;
        $user->apellidos = $request->apellidos;
        $user->password = $request->password;
        $user->cedula = $request->cedula;
        $user->celular = $request->celular;
        $user->email = $request->email;
        $user->tipo = $request->tipo;
        $user->insertador = $yo;
        $user->active = 1;
        $user->save();


        $d = Entidad::where('user_id',$id)->get(['user_id'])->toArray();
        //dd($d);
        if(!empty($d) || $d != NULL || $d != "")
        {
            $a = $request->facultad;
            $b = $request->carrera;
            $c = $request->materia;
            $d = $request->sigla;
            Entidad::where('user_id',$id)
                        ->update([
                            'facultad'=> $a,
                            'carrera' => $b,
                            'materia' => $c,
                            'sigla'   => $d,
                            'user_id' => $id
                        ]);
        }
        $dat = date('Y-m-d h:m:s');
        Entidad::create([
                'facultad'  => $request['facultad'],
                'carrera'   => $request['carrera'],
                'materia'   => $request['materia'],
                'sigla'     => $request['sigla'],
                'user_id'   => $id,
                'created_at'=>$dat,
                'updated_at'=>$dat
        ]);
        

        

        /*$this->user->fill($request->all());
        $this->user->save();*/
        Session::flash('message','Usuario editado correctamente...');
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
        $this->user->delete();
        Session::flash('message','Usuario eliminado correctamente...');
        return redirect('users');
    }
    public function getImpresiones()
    {
        return view('automotores.usuarios.impresiones'); 
    }
    public function getTodos()
    {
        
        $todos = User::get();
        $numero= $todos->chunk(20);

        //dd($numero);
        $responsable = Auth::user()->full_name;
        //dd($responsable);
        $date = date('d-m-Y');
        //dd($date);
        $view =  \View::make('automotores.usuarios.pdf.todos', compact('numero','date', 'todos','responsable'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta','portrait')->stream();
        return $pdf->stream('Todos los Usuarios');

        /*$html='
        <html lang="en">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <title>Example 2</title>
        </head>
        <body>
        <img src="images/logoescuela.png" style="width:50px"/>
        <h1>Prueba</h1>
        <table style="border: 1px solid #000;">
        <thead style="border: 1px solid #000;">
        <tr style="border: 1px solid #000;">
        <th style="border: 1px solid #000;">Nombre</th>
        </tr>
        <thead>
        <tbody>';
        $filas='';
        foreach ($todos as $alumno)
        {
        $filas=$filas.'<tr><td>'.$alumno->nombres.'</td></tr>';
        }
        $html=$html.$filas.'</tbody></table> </body></html>';
        $pdf->loadHTML($html);
        return $pdf->stream();  */

    }
    public function getChoferes()
    {
        $choferes = User::where('tipo','chofer')->get();

        //dd($numero);
        $responsable = Auth::user()->full_name;
        //dd($responsable);
        $date = date('d-m-Y');
        //dd($date);
        $view =  \View::make('automotores.usuarios.pdf.choferes', compact('numero','date', 'choferes','responsable'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta','portrait')->stream();
        return $pdf->stream('Choferes');
    }
    public function getMecanicos()
    {
        $mecanicos = User::where('tipo','mecanico')->get();

        //dd($numero);
        $responsable = Auth::user()->full_name;
        //dd($responsable);
        $date = date('d-m-Y');
        //dd($date);
        $view =  \View::make('automotores.usuarios.pdf.mecanicos', compact('numero','date', 'mecanicos','responsable'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta','portrait')->stream();
        return $pdf->stream('Mecánicos'); 
    }
    public function getEncargados()
    {
        $encargados = User::where('tipo','encargado')->get();

        //dd($numero);
        $responsable = Auth::user()->full_name;
        //dd($responsable);
        $date = date('d-m-Y');
        //dd($date);
        $view =  \View::make('automotores.usuarios.pdf.encargados', compact('numero','date', 'encargados','responsable'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta','portrait')->stream();
        return $pdf->stream('Encargados');  
    }

}
