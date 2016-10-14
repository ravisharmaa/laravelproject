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
// Basic Routing for preventing un-authorized users
Route:: group(['prefix'=>'admin', 'middleware'=>'auth'], function() {
	Route:: get('/dashboard', ['as'=>'admin.dashboard', 'uses'=>'Admin\AdminBaseController@home']);
	Route:: get('todo/index', ['as'=>'todo.index', 'uses'=>'Admin\ToDOController@index']);
	Route:: get('todo/create', ['as'=>'todo.create', 'uses'=>'Admin\ToDOController@create']);
	Route:: post('todo/save', ['as'=>'todo.store', 'uses'=>'Admin\ToDOController@store']);

});
