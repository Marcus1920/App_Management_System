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

Route::post('forgotpassword','RecoverPasswordController@reset');
Route::get('forgotpassword','RecoverPasswordController@index');

//Auth::routes();

Route::get('/logout', function(){

 Sentinel::logout(null, true);

});




Route::get('home', 'HomeController@index')->name('home')->middleware('UserRole');

Route::get('register','RegisterController@registrationForm')->middleware('UserRole');
Route::post('register','RegisterController@registerUser')->middleware('UserRole');

Route::get('logout' , 'RegisterController@logout')->middleware('UserRole');


Route::get('add-iteration',function(){
    return view('apps.add');
});

Route::get('getAll','IterationController@index');
Route::get('getIteration/{id}','IterationController@show');
Route::post('storeIteration','IterationController@store');
Route::get('editIteration/{id}','IterationController@edit');
Route::get('deleteIteration/{id}','IterationController@destroy');

Route::get('/activate/{email}/{activationCode}','ActivationController@Activate');

Route::get('Addroles','RolesController@index');
Route::post('Addroles','RolesController@store');

