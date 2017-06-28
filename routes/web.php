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

Route::get('admin/cars', 'CarController@showList');

Route::get('admin/cars/{id}', 'CarController@showEdit');

Route::post('admin/cars/edit', 'CarController@edit');

Route::get('admin/cars/create', 'CarController@showCreate');

Route::post('admin/cars/create', 'CarController@create');

Route::get('admin/cars/{id}/eliminar', 'CarController@deleteCar');

Route::get('admin/brands', 'BrandController@showList');

Route::get('admin/models', 'ModelController@showList');




// ----  RUTAS PUBLICAS ------ //

Route::get('', 'HomeController@showHome');

Route::get('nosotros', 'HomeController@showAboutUs');

Route::get('contacto', 'HomeController@showContact');

Route::post('contacto', 'HomeController@sendContact');

Route::get('ventas', 'CarController@showSales');


Route::get('test/admin/crear', function() {
    return view('admin.carCreateForm');
});

Route::get('test/admin/lista', function() {
    return view('admin.carList');
});

Route::get('test/admin/editar', function() {
    return view('admin.carEditForm');
});