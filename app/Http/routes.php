<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => 'web'], function(){
	Route::get('/','HomeController@index');

	Route::auth();

<<<<<<< HEAD
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/register', 'Auth\AuthController@register');
=======
	Route::get('/home', 'HomeController@index');
});
>>>>>>> origin/autenticacao
