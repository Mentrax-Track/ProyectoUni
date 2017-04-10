<?php

namespace Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Infraestructura\Capital;
use Infraestructura\Http\Requests;
use Infraestructura\Http\Controllers\Controller;
use Session;
use Redirect;
use Auth;
use Illuminate\Routing\Route;
class CapitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo "estas aqui";
        $fecha=(date("d-m-Y"));
        $comando = array("pg_dump", "-U","postgres", "-F", "c", "-b", "-w","kalilinux", "-f", "c:\\xampp\\htdocs\\infraestructura\\storage\\backup\\backup-".""."infra".$fecha.".backup", 'test10');
       //dd($comando);pg_dump.exe -h localhost -p 5433 -U postgres -E LATIN1 -F c -b -v -f "<<path>>nombre_archivo_base.backup" base_a_exportar
        exec(join(' ',$comando));
        Session::flash('message','El backup fue creado correctamente');
        return redirect('/users');
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
        Capital::create($request->all());
        Session::flash('message','Capital Actualizado correctamente....');
        return redirect('recargues');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
