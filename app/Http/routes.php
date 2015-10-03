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


Route::get('home', function () {
	if (Auth::guest()) {
		return Redirect::to('auth/login');
	} else {
		echo 'Welcome home '. Auth::user()->email .' .';
	}
});

Route::get('user/{id}', function($id){
	$user = App\User::find($id);
	echo 'User ID: '	. $id.			'<br />';
	echo 'User Email: '	. $user->email.	'<br />';
	echo 'User Name: '	. $user->name.	'<br />';
});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');