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



Route::prefix('paginas')->group(function(){
	Route::get('/create', 'PaginasController@create')->name('paginas.create');
	Route::get('/', 'PaginasController@index')->name('paginas');
	Route::get('/{pagina_id}', 'PaginasController@edit')->name('paginas.edit');
	Route::get('/view/{pagina_id}', 'PaginasController@view')->name('paginas.view');
	Route::post('/store', 'PaginasController@store')->name('paginas.store');

});


Route::prefix('usuarios')->group(function(){
	Route::get('/', 'UsuariosController@index');
	Route::get('/{usuario_id}', 'UsuariosController@edit')->name('usuarios.edit');
	Route::get('/view/{usuario_id}', 'UsuariosController@view')->name('usuarios.view');
	Route::post('/store', 'UsuariosController@store')->name('usuarios.store');

});
