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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('usuarios')->group(function(){
	Route::get('/', 'UsuariosController@index');
	Route::get('/{usuario}', 'UsuariosController@edit')->name('usuarios.edit');
	Route::get('/view/{usuario}', 'UsuariosController@view')->name('usuarios.view');
});
