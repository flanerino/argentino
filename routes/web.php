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
Route::name('socios_path')->get('/socios', 'SociosController@show_socios');
Route::name('delete_socio_path')->delete('/socios/{socio}', 'SociosController@delete_socio');
Route::name('edit_socio_path')->get('/socios/{socio}/edit','SociosController@edit_socio');
