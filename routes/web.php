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

Route::get('getAll','IterationController@index');
Route::get('getIteration/{id}','IterationController@show');
Route::get('storeIteration','IterationController@store');
Route::get('editIteration/{id}','IterationController@edit');
Route::get('deleteIteration/{id}','IterationController@destroy');