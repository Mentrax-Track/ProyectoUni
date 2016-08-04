<?php

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




// Registration routes...
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

    Route::resource('users','UsersController');
    Route::resource('encar','EncargadoController');

    Route::resource('vehiculos','VehiculosController');
    Route::resource('destino','DestinosController');
});
