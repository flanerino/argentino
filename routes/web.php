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


Route::name('delete_socio_path')->delete('/socios/{socio}', 'SociosController@delete_socio');

Route::name('edit_socio_path')->get('/socios/{socio}/edit','SociosController@edit_socio');
Route::name('update_socio_path')->put('/socios/{socio}','SociosController@update_socio');

Route::name('create_socio_path')->get('/socios/create', 'SociosController@create_socio');
Route::name('store_socio_path')->post('/socios', 'SociosController@store_socio');

Route::name('socio_path')->get('/socios/{socio}', 'SociosController@show_socio');
Route::name('socios_path')->get('/socios', 'SociosController@show_socios');
