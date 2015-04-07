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

Route::get('/login','UserController@getLogin');
Route::post('/login','UserController@postLogin');
Route::get('/register','UserController@getRegister');
Route::post('/register','UserController@postRegister');
Route::get('/logout','UserController@getLogout');
Route::get('/{username}',['as'=> 'user.page', 'uses' => 'HomeController@userpage']);
Route::post('check-username','UserController@check_username');
Route::post('check-email','UserController@check_email');
Route::get('/','HomeController@getIndex');
<<<<<<< HEAD
Route::post('post/create','PostController@store');
Route::get('post/index','PostController@index');
=======
>>>>>>> b9d25ade8fc3a270431a9da96f872fef67395913
//API for Post Controller
Route::resource('post','PostController');
//API for User Controller
Route::resource('user','UserController');
// Route::filter('check-user',function(){
// 	if(Session::has('user')){
// 		$username = Session::get('username');
// 		if(Session[])
// 		return Redirect::to('')
// 	}
// });
// Route::group(['prefix' => $us'admin', 'before' => 'auth'], function () {
Route::get('{username}/admin', array('before' => 'check_admin', 'as' => 'user.admin', 'uses' => 'HomeController@useradmin' ))->where(array( 'username' => '[a-zA-Z0-9-_]+'));

Route::filter('check_admin', function() {
	$username = Request::segment(1); // Lay thong tin user tren Param
	if( !User::check_logged($username) ) {
		return Redirect::route('user.page', array('username' => $username));
		//die('Nothing to do');
	}
});

