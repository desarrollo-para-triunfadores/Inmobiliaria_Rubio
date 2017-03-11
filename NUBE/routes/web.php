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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();  //no se si va ac�

/** FRONT-END **/
Route::resource('/','frontHomeController');
Route::resource('/inmueble','frontInmuebleController');

Auth::routes();

Route::get('/home', 'HomeController@index');

/** BACK-END **/
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('usuarios','UsersController');
    Route::resource('paises','PaisesController');
    Route::resource('provincias','ProvinciasController');
    Route::resource('localidades','LocalidadesController');
    Route::resource('barrios','BarriosController');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
