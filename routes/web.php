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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/socios', 'SociosController@show_socios');

// Rutas de la parte GASTOS
Route::prefix('gastos')->group(function(){
  Route::get('/create-gasto', 'GastosController@createGasto')->name('create.gasto');
  Route::post('/create-gasto', 'GastosController@storeGasto')->name('store.gasto');
  Route::get('/lista', 'GastosController@showListaGastos')->name('gastos.lista');
  Route::get('/edit-gasto/{gasto}', 'GastosController@editGasto')->name('edit.gasto');
  Route::put('/edit-gasto/{gasto}', 'GastosController@updateGasto')->name('update.gasto');
  Route::delete('/lista/{gasto}', 'GastosController@deleteGasto')->name('delete.gasto');
});
