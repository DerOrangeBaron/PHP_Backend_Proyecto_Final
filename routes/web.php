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

Route::get('admin/autos', 'CarController@showList');

Route::get('admin/autos/{id}', 'CarController@showEdit');

Route::post('admin/autos/editar', 'CarController@edit');

Route::get('admin/autos/crear', 'CarController@showCreate');

Route::post('admin/autos/crear', 'CarController@create');

Route::get('admin/autos/{id}/eliminar', 'CarController@deleteCar');

Route::get('admin/marcas', 'BrandController@showList');

Route::get('admin/modelos', 'ModelController@showList');




// ----  RUTAS PUBLICAS ------ //

Route::get('', 'HomeController@showHome');

Route::get('nosotros', 'HomeController@showAboutUs');

Route::post('contacto', 'HomeController@sendContact');

Route::get('ventas', 'CarController@showSales');

Route::get('reservar/{id}', 'HomeController@showReserve');

Route::post('reservar', 'HomeController@reserve');

Route::get('test', function() {
    return view('web.sales');
});