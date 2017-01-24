<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Destino;
use Infraestructura\Provincia;
use Infraestructura\Municipio;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Infraestructura\Http\Requests\DestinoCreateRequest;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Illuminate\Contracts\Auth\Guard;

class DestinoController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin',['only'=>['create','edit','getImprimir']]);
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->des = Destino::find($route->getParameter('destinos'));
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (\Auth::user()->tipo == 'mecanico') 
        {
            Session::flash('mensaje-rol','Sin privilegios');
            return redirect()->to('acceso');
        }
        $destinos = Destino::ruta($request->get('ruta'))->dep($request->get('dep'))->orderBy('id','DESC')->paginate(10);
        return view('automotores.destino.index', compact('destinos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('automotores.destino.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DestinoCreateRequest $request)
    {
        Destino::create($request->all());
        Session::flash('message','Destino insertado correctamente...');
        return redirect('destinos');
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
        return view('automotores.destino.edit',['des'=>$this->des]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DestinoCreateRequest $request, $id)
    {
        $this->des->fill($request->all());
        $this->des->save();
        Session::flash('message','Destino Editado corréctamente...');
        return redirect('destinos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->des->delete();
        Session::flash('message','Destino Eliminado corréctamente...');
        return redirect('destinos');
    }
    public function getImprimir()
    {
        $potosi = Destino::where('dep_inicio','Potosí')
                        ->orWhere('dep_final','Potosí')
                        ->get();
        //dd($potosi);
        $oruro = Destino::where('dep_inicio','Oruro')
                        ->orWhere('dep_final','Oruro')
                        ->get();
        $lapaz = Destino::where('dep_inicio','La Paz')
                        ->orWhere('dep_final','La Paz')
                        ->get();
        $pando = Destino::where('dep_inicio','Pando')
                        ->orWhere('dep_final','Pando')
                        ->get();
        $cochabamba = Destino::where('dep_inicio','Cochabamba')
                        ->orWhere('dep_final','Cochabamba')
                        ->get();
        $sucre = Destino::where('dep_inicio','Sucre')
                        ->orWhere('dep_final','Sucre')
                        ->get();
        //dd($sucre);
        $tarija = Destino::where('dep_inicio','Tarija')
                        ->orWhere('dep_final','Tarija')
                        ->get();
        $santacruz = Destino::where('dep_inicio','Santa Cruz')
                        ->orWhere('dep_final','Santa Cruz')
                        ->get();
        $beni      = Destino::where('dep_inicio','Beni')
                        ->orWhere('dep_final','Beni')
                        ->get();
        

        
        $responsable = \Auth::user()->full_name;
        //dd($responsable);
        
        $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
           'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
               'Miercoles', 'Jueves', 'Viernes', 'Sabado');
        $date = $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y');
        /*"Miercoles, 07 de Diciembre de 2016"*/
        //dd($date);
        $view =  \View::make('automotores.destino.pdf', compact('date','potosi', 'oruro', 'lapaz', 'pando', 'cochabamba', 'sucre', 'tarija', 'santacruz', 'beni','responsable'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('carta','portrait')->stream();
        return $pdf->stream('Destinos');
    }
}
