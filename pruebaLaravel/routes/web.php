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

Route::get('/saldar_entrada',function(){
	echo "hola";
});

Route::get('/saldar_salda',function(){
	echo "hola";
});

//Route::get('/', function () {
  //  return view('bienvenida/inicio');
//});
//Route::get('/usuarios/create','UsuariosController@create');

//Route::get('/usuarios','UsuariosController@index');

Route::resource('clientes', 'ClientesController')->middleware('auth');
Route::resource('eventos', 'EventosController')->middleware('auth');


Route::resource('usuarios','UsuariosController');

Route::resource('paquetes','PaquetesController');
Route::resource('paquetesDos','PaquetedosController');

Route::resource('gastos','GastosController');


Route::resource('bienvenida.inicio','BienvenidaController');
//Route::resource()



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
