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

Route::get('getIterationSettings','IterationSettingController@index');
Route::get('getIterationSetting/{id}','IterationSettingController@show');
Route::get('storeIterationSettings','IterationSettingController@store');
