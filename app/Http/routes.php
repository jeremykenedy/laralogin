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

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// HOMEPAGE ROUTE
Route::get('/', function () {
    return view('welcome');
});

// USER PAGES ROUTES
$router->group([
  'namespace' => 'Users',
  'middleware' => 'auth',
], function () {

	Route::get('home', function () {
	    echo 'Welcome home '. Auth::user()->email .' .';
	});

	Route::get('user', function () {
	    echo 'Hi '. Auth::user()->email .',<br />';
		echo 'User ID: '		. Auth::user()->id.	'<br />';
		echo 'User Email: '		. Auth::user()->email.	'<br />';
		echo 'User Name: '		. Auth::user()->name.	'<br />';
		echo 'Is Admin: '		. Auth::user()->admin.	'<br />';
		echo 'Is SuperAdmin: '	. Auth::user()->superadmin.	'<br />';
		echo '<a href="/auth/logout">Logout</a>';
	});

	Route::get('user/{id}', function ($id) {
		$user = App\User::find($id);
		echo 'User ID: '	. $id.			'<br />';
		echo 'User Email: '	. $user->email.	'<br />';
		echo 'User Name: '	. $user->name.	'<br />';
		echo '<a href="/auth/logout">Logout</a>';
	});

	Route::get('user/{id}', function ($id) {
		$user = App\User::find($id);
		echo 'User ID: '	. $id.			'<br />';
		echo 'User Email: '	. $user->email.	'<br />';
		echo 'User Name: '	. $user->name.	'<br />';
		echo '<a href="/auth/logout">Logout</a>';
	});

});

// ADMIN PAGES ROUTES
$router->group([
  'namespace' => 'Admins',
  'middleware' => 'admin',
], function () {
	Route::get('admin', function () {
	    echo 'Welcome to your admin page '. Auth::user()->email .'.';
	});
});

// SUPER ADMIN ADMIN PAGES ROUTES
$router->group([
  'namespace' => 'SuperAdmins',
  'middleware' => 'superadmin',
], function () {
	Route::get('superadmin', function () {
	    echo 'Welcome to your superadmin page '. Auth::user()->email .'.';
	});

});