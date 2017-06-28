<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('autos', 'CarController@listJson');

Route::get('autos/{id}', 'CarController@showJson');

Route::get('modelos', 'ModelController@listJson');

Route::get('marcas', 'BrandController@listJson');