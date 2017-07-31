<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// Rutas de la parte GASTOS
Route::prefix('gastos')->group(function(){
    Route::post('/edit-gasto/{gasto}', 'GastosController@updateGasto')->name('update.gasto');
    Route::get('/create-gasto', 'GastosController@createGasto')->name('create.gasto');
    Route::post('/create-gasto', 'GastosController@storeGasto')->name('store.gasto');
    Route::get('/lista', 'GastosController@showListaGastos')->name('gastos.lista');
    Route::get('/edit-gasto/{gasto}', 'GastosController@editGasto')->name('edit.gasto');
    Route::delete('/lista/{gasto}', 'GastosController@deleteGasto')->name('delete.gasto');
});

// Rutas de la parte INGRESOS
Route::prefix('ingresos')->group(function(){
    Route::post('/edit-ingreso/{ingreso}', 'IngresosController@updateIngreso')->name('update.ingreso');
    Route::get('/create-ingreso', 'IngresosController@createIngreso')->name('create.ingreso');
    Route::post('/create-ingreso', 'IngresosController@storeIngreso')->name('store.ingreso');
    Route::get('/lista', 'IngresosController@showListaIngresos')->name('ingresos.lista');
    Route::get('/edit-ingreso/{ingreso}', 'IngresosController@editIngreso')->name('edit.ingreso');
    Route::delete('/lista/{ingreso}', 'IngresosController@deleteIngreso')->name('delete.ingreso');
});

// Rutas de la parte DEPORTES
Route::prefix('deportes')->group(function(){
  Route::get('/lista', 'DeportesController@showListaDeportes')->name('deportes.lista');
  Route::get('/create-deporte', 'DeportesController@createDeporte')->name('create.deporte');
  Route::post('/create-deporte', 'DeportesController@storeDeporte')->name('store.deporte');
  Route::get('/edit-deporte/{deporte}', 'DeportesController@editDeporte')->name('edit.deporte');
  Route::put('/edit-deporte/{deporte}', 'DeportesController@updateDeporte')->name('update.deporte');
  Route::delete('/lista/{deporte}', 'DeportesController@deleteDeporte')->name('delete.deporte');
});

// Rutas de la parte SOCIOS
Route::name('update_socio_path')->post('/socios/{socio}','SociosController@update_socio');
Route::name('delete_socio_path')->delete('/socios/{socio}', 'SociosController@delete_socio');
Route::name('edit_socio_path')->get('/socios/edit/{socio}','SociosController@edit_socio');
Route::name('create_socio_path')->get('/socios/create', 'SociosController@create_socio');
Route::name('store_socio_path')->post('/socios', 'SociosController@store_socio');
//Route::name('socio_path')->get('/socios/{socio}', 'SociosController@show_socio');
Route::name('socios_path')->get('/socios', 'SociosController@show_socios');

// 404
Route::any( '{catchall}', function ( $page ) {
	$title='P&aacute;gina no encontrada';
	$page_description='La p&aacute;gina '.$page.' no encontrada';
	return view('notfound',compact('page','title','page_description'));
} )->where('catchall', '(.*)');
