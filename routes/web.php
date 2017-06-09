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

/*Route::get('/', function () {
    return view('welcome');
});
*/

//

Route::get('logout','LoginController@logout');
Route::get('/login','LoginController@login');

Route::get('/','LoginController@login');

Route::post('login','LoginController@postlogin');



//Auth::routes();

Route::get('/logout', function(){

 Sentinel::logout(null, true);

});




Route::get('home', 'HomeController@index')->name('home');
Route::get('register','RegisterController@registrationForm');
Route::post('register','RegisterController@registerUser');
Route::get('logout' , 'RegisterController@logout') ;

Route::get('getAll','IterationController@index');
Route::get('getIteration/{id}','IterationController@show');
Route::get('storeIteration','IterationController@store');
Route::get('editIteration/{id}','IterationController@edit');
Route::get('deleteIteration/{id}','IterationController@destroy');
