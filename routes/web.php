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

// ----  RUTAS DE ADMINISTRADOR ------ //

Route::get('admin/autos', 'AdminCarController@index')->middleware('auth');

Route::get('admin/autos/crear', 'AdminCarController@create')->middleware('auth');

Route::post('admin/autos/crear', 'AdminCarController@store')->middleware('auth');

Route::get('admin/autos/{id}', 'AdminCarController@edit')->middleware('auth');

Route::post('admin/autos/{id}/editar', 'AdminCarController@update')->middleware('auth');

Route::get('admin/autos/{id}/eliminar', 'AdminCarController@delete')->middleware('auth');

Route::get('admin/marcas', 'BrandController@adminList')->middleware('auth');

Route::get('admin/modelos', 'ModelController@adminList')->middleware('auth');




// ----  RUTAS PUBLICAS ------ //

Route::get('', 'PagesController@index');

Route::get('nosotros', 'PagesController@showAboutUs');

Route::post('contacto', 'PagesController@sendContact');

Route::get('ventas', 'CarController@sales');

Route::get('reservar/{id}', 'CarController@showReserve');

Route::post('reservar/{id}', 'CarController@reserve');

Route::get('test', function() {
    return view('web.sales');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
