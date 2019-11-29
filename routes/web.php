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
    return view('layouts.main');
});

Route::get('/home', 'HomeController@index')->name('casa');

Auth::routes(['verify' => true]);

Route::get('catalogo','DiscoController@catalogoDisco')->name('cat');

Route::get('formato','DiscoController@returnJson')->name('api');

Route::middleware(['admin','verified'])->group(function () {

Route::resource('discos','DiscoController');

Route::resource('famoso','FamosoController');

Route::resource('discografica','DiscograficaController');

Route::resource('usuario','UserController')->only(['index']);

Route::get('logico', 'FamosoController@listaBorrados')->name('borrado');

Route::get('restore/{id}', 'FamosoController@restore')->name('restaura');

});



