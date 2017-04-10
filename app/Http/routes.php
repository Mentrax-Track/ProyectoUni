<?php
use Infraestructura\Destino;
use Infraestructura\User;
use Infraestructura\Mapa;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

//Estas tres rutas ya no uso 
Route::get('Automotores', function () {
    return view('autoLayout');
});

Route::get('Servicios', function () {
    return view('serviLayout');
});

Route::get('Mantenimiento', function () {
    return view('manteLayout');
});


// Authentication routes...
Route::get('inicio-de-sesion', [
    'uses'=>'Auth\AuthController@getLogin',
    'as'  =>'login'
    ]);
Route::post('inicio-de-sesion', 'Auth\AuthController@postLogin');


Route::get('Salir', [
    'uses' => 'Auth\AuthController@getLogout',
    'as' => 'logout'
    ]);





// Registration routes... No lo uso 
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');


// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

//Este middleware es para q solo los usuarios 
//que iniciaron session tengan acceso a dichas rutas
Route::group(['middleware' => 'auth'], function(){

    Route::get('Inicio-Automotores', [
    'uses' => 'AutomotoresController@index',
    'as'   => 'auto'
    ]);
    Route::post('Inicio-Automotores','AutomotoresController@index');

///// Rutas para intrudcir un usuario normal o encargado /////////// 
    Route::get('imprimir','UsersController@getImpresiones');
    Route::resource('users','UsersController');
    Route::resource('encar','EncargadoController');


    Route::resource('vehiculos','VehiculosController');
    Route::resource('destinos','DestinoController');

    
    Route::get('calendario','CalendarioController@calendario');
    Route::get('events','CalendarioController@index');

    Route::resource('reservas','ReservasController');

    Route::get('viajes/{id}/Cancelar','ViajesController@getCancelar');
    Route::resource('viajes','ViajesController');
///////////////////////////////////////////////////////////////////////////////////////
    /////////////////// Estas rutas son para el plugins select2 en viajes ////////////
    Route::get('chofer', function (Illuminate\Http\Request  $request) {
        $term = $request->term ?: '';
        $choferes = Infraestructura\User::where('tipo', 'chofer', $term.'%')
                    ->orderBy('nombres','ASC')
                    ->get(['id', 'nombres', 'apellidos'])
                    ->lists('full_name','id');
        $valid_choferes = [];                                               
        foreach ($choferes as $id => $chof) {
            $valid_choferes[] = ['id' => $id, 'text' => $chof];
        }
        return \Response::json($valid_choferes);
    });
    /*El plugin Select2 espera la data para llenar el campo con el siguiente formato:
       
        [{'id': 00, 'text' => 'chof-name' }]
        
      Es por este motivo que se crea un nuevo array llamado $valid_choferes en el bloque anterior.
    */
    Route::get('vehiculo', function (Illuminate\Http\Request  $request) {
        $term = $request->term ?: '';
        $vehiculos = Infraestructura\Vehiculo::where('estado', 'optimo', $term.'%')
                    ->orderBy('tipog','ASC')
                    ->get(['id', 'tipog', 'placa'])
                    ->lists('full_vehiculo','id');
        $valid_vehiculos = [];                                               
        foreach ($vehiculos as $id => $vehi) {
            $valid_vehiculos[] = ['id' => $id, 'text' => $vehi];
        }
        return \Response::json($valid_vehiculos);
    });

    Route::get('encargado', function (Illuminate\Http\Request  $request) {
        $term = $request->term ?: '';
        $encargados = Infraestructura\User::where('tipo', 'encargado', $term.'%')
                    ->orderBy('nombres','ASC')
                    ->get(['id', 'nombres', 'apellidos'])
                    ->lists('full_name','id');
        $valid_encargados = [];                                               
        foreach ($encargados as $id => $encar) {
            $valid_encargados[] = ['id' => $id, 'text' => $encar];
        }
        return \Response::json($valid_encargados);
    });
////////////////   Hast aaqui los plugins ///////////////////////////////
///////   Se podia solo crear una pero se realizo con dos ///////////////
    /*Rutas para obtener los kilometrajes*/
    Route::get('/distancia', function () {

        $cant_id = Input::get('cant_id');
        $id = (int)$cant_id;
        $kilo = Destino::where('id',$id)
                    ->get(['id','kilometraje']);

        return Response::json($kilo);
    });

    Route::get('/kilometraje', function () {

        $dest_id = Input::get('dest_id');
        $id = (int)$dest_id;
        $kilo = Destino::where('id',$id)
                    ->get(['id','kilometraje']);
            
        return Response::json($kilo);
    });
///////// Hasta aqui las rutas para los kilometrajes de viajes/////////////////
//});
/////////// rutas //////////
Route::resource('rutas','RutasController');

Route::resource('reserviaje','ReservaViajeController');


Route::get('presupuestos/{id}/pdf','PresupuestoController@getImprimir');
Route::resource('presupuestos','PresupuestoController');

Route::get('presupuestosDia/{id}/pdf','PresupuestosDiaController@getImprimir');
Route::resource('presupuestosDia','PresupuestosDiaController');

Route::resource('salidas','SalidasController');

Route::get('roles/{id}/limpiar','RolesController@getLimpiar');
Route::get('roles/pdf','RolesController@getImprimir');
Route::resource('roles','RolesController');
Route::get('roles/{id}/excepcion','RolesController@getExcepcion');
Route::post('roles/excepcion', 'RolesController@getGuardar');
Route::get('roles/{id}/ver', 'RolesController@getVer');

///////   Esto es para roles aqui recive lo que se envio ///////////////
    /*Ruta para obtener el id del chofer*/
    Route::get('/rol', function () {

        $cho = Input::get('cho');
        $cho = (int)$cho;
        $chos = "ciudad";           
        return Response::json($chos);

    });
///////// Hasta aqui los roles///////////////

Route::get('informes/{id}/pdf','InformeController@getImprimir');
Route::get('infodias/{id}','InformeController@getPresudia');
Route::resource('informes','InformeController');


//Ruta para el tablero de muestras de viajes
Route::get('Viajes-Realizados', [
    'uses' => 'TableroController@getRealizados',
    'as' => 'viajeros'
    ]);
Route::get('Viajes-Reservados', [
    'uses' => 'TableroController@getReservas',
    'as'   => 'reservas'
    ]);
Route::get('Viajes-del-Mes', [
    'uses' => 'TableroController@getVmes',
    'as'   => 'meses'
    ]);

//Rutas para el mapa implementado/////
Route::resource('mapas','MapaController');
Route::get('mapas/{id}/Ver','MapaController@getVer');


///Para imprimir los viajes del tablero
Route::get('Impresión-de-Viajes', [
    'uses' => 'TableroController@getImprimirealizados',
    'as'   => 'realizados'
    ]);
Route::get('Impresión-de-Viajes-Reservados', [
    'uses' => 'TableroController@getImprimireservados',
    'as'   => 'reservas'
    ]);
Route::get('Impresión-de-Viajes-del-Mes', [
    'uses' => 'TableroController@getImprimirmes',
    'as'   => 'meses'
    ]);


Route::resource('solicitudes','SolicitudController');
Route::get('imprimirSolicitudes/{id}/pdf','SolicitudController@getImprimir');

Route::resource('mecanicos','MecanicoController');
Route::get('imprimirSolicitudesTotal','MecanicoController@getImprimir');

Route::resource('mail','MailController');

//Impresiones para los tipos de choferes/////*
Route::get('imprimire','UsersController@getImpresiones');
Route::get('Todos-los-Usuarios', [
    'uses' => 'UsersController@getTodos',
    'as'   => 'todos'
    ]);
Route::get('Todos-los-choferes', [
    'uses' => 'UsersController@getChoferes',
    'as'   => 'choferes'
    ]);
Route::get('Todos-los-mecánicos', [
    'uses' => 'UsersController@getMecanicos',
    'as'   => 'mecanicos'
    ]);
Route::get('Todos-los-encargados', [
    'uses' => 'UsersController@getEncargados',
    'as'   => 'encargados'
    ]);

/////////////////Impreciones de los Vehículos/8////
Route::get('imprimir','VehiculosController@getImprimir');
Route::get('imprimireVehiculos','VehiculosController@getImprimire');
Route::post('imprimirVehiculosAlgunos','VehiculosController@getImprimirvehis');

Route::get('imprimirDestino','DestinoController@getImprimir');

//////////////////////////////////REPORTES///////
Route::resource('reportes','ReportesController');
//////////////////////////////////COMBUSTIBLES///////
Route::post('combustible/create', 'CombustiblesController@getGuardar');
Route::resource('combustibles','CombustiblesController');
Route::get('combustible/{id}/limpiar','CombustiblesController@getLimpiar');
Route::get('combustible/mostrar', 'CombustiblesController@getMostrar');
Route::get('imprimirCombustible','CombustiblesController@getImprimir');
Route::get('Combustible','CombustiblesController@getImprimire');
Route::get('combustibleReportes','CombustiblesController@getReporte');
Route::get('combustible/{id}/Actualizar','CombustiblesController@getActualizar');

//////////////////////////////////RECARGUES///////
Route::resource('recargues','RecargueController');
Route::get('Recargas','RecargueController@getImprimir');
Route::get('RecargasGuardar','RecargueController@getGuardar');
Route::get('Capital','RecargueController@getCapital');


Route::resource('capital','CapitalController');

Route::get('km/{id}/Actualizar','VehiculosController@getKilometraje');

Route::get('kms/{id}/Actualizar','VehiculosController@getKilometrajeinforme');

Route::resource('ks','KilometrajeController');

Route::resource('kms','KilometrajeinformeController');



Route::get('kmsm/{id}/Actualizar','VehiculosController@getKilometrajemecanico');


Route::resource('kmm','KilomecanicoController');


Route::get('vehiculoKardex','MecanicoController@getImprimirk');

Route::post('ImprimirKardex','MecanicoController@getImprimirkardex');


Route::resource('peticion','PeticionController');
Route::get('InsertarPeticion','PeticionController@getInsertar');

Route::get('imprimir/{id}/Peticion','PeticionController@getImprimir');

Route::resource('devoluciones','DevolucionController');
Route::get('ImprimirDevoluciones','DevolucionController@getImprimir');
Route::get('imprimir/{id}/Devolucion','DevolucionController@getImprimiru');
});

