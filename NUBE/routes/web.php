<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::auth();  //no se si va aca

/** FRONT-END * */
Route::resource('/', 'frontHomeController');
Route::resource('/inmueble','RolesController');

Route::resource('/detalle', 'DetallesFrontController');
Route::resource('/contacto', 'MailFrontController');

Auth::routes();

Route::get('/home', 'HomeController@index');

/** BACK-END * */
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('usuarios', 'UsersController');
    Route::resource('roles', 'RolesController');
    Route::resource('paises', 'PaisesController');
    Route::resource('provincias', 'ProvinciasController');
    Route::resource('localidades', 'LocalidadesController');
    Route::resource('barrios', 'BarriosController');
    Route::resource('tipos_caracteristicas', 'TiposController');
    Route::resource('caracteristicas', 'CaracteristicasController');
    Route::resource('inmuebles','InmueblesController');

    Route::resource('edificios', 'EdificiosController');

    Route::resource('garantes', 'GarantesController');
    Route::resource('inquilinos', 'InquilinosController');


    Route::get('/configuracion', function () {  // esta ruta es solo para zafar, pero hay que hacer un controller con la info de la empresa
        return view('admin.configuracion.main');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index');
