<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
// Auth::routes();
Route:: get('/login', 'Auth\LoginController@getForm');
Route:: post('/login', ['as'=>'admin.login','uses'=>'Auth\LoginController@store' ]);
Route:: get('admin/logout', function(){
	Auth::logout();
	return view('auth.login');
});
// Basic Routing for preventing un-authorized
users
Route:: group(['prefix'=>'admin', 'middleware'=>'auth'], function() {
	Route:: get('/dashboard', 'DashboardController@invoke');

});
