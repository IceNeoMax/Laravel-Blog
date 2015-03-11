<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});
Route::get('/login',function()
{
    return View::make('login');
});
Route::post('/login','UserController@login');
Route::get('post/index','PostController@index');
Route::post('post/store','PostController@store');
Route::post('post/draft','PostController@draft');
Route::post('resource/upload','ResourceController@upload');
//API for Post Controller
Route::resource('post','PostController');
//API for User Controller
Route::resource('user','UserController');
