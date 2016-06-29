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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teste', function(){
	return "askjdbl";
});

Route::get('/teste234', function(){
	return "a342151324413241234";
});

Route::get('/teste4', function(){
	return "a342151324413241234";
});
Route::get('teste123456', function(){
	return "Blá";
});