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
Route::resource('users', 'UserController');
Route::resource('garden', 'GardenController');
Route::resource('template', 'TemplateController');
Route::resource('garden-plants', 'GardenPlantsController');
Route::resource('template-type', 'TemplateTypeController');
Route::resource('garden-properties', 'GardenPropertiesController');