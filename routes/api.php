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

Route::get('autos', 'CarController@listCarsJson');

Route::get('autos/{id}', 'CarController@carDetailJson');

Route::get('modelos', 'ModelController@listModelsJson');

Route::get('marcas', 'BrandController@listBrandsJson');