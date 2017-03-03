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
Route::get('/login', 'Auth\LoginController@getForm');
Route::post('/login', ['as' => 'admin.login', 'uses' => 'Auth\LoginController@store']);
Route::get('admin/logout', function () {
    Auth::logout();
    return view('auth.login');
});

//Routing Structure For Frontend
Route::get('/', ['as' => 'site.home', 'uses' => 'FrontendController@index']);
Route::get('gallery/{slug}', ['as' => 'gallery.details', 'uses' => 'FrontendController@details']);

// Basic Routing for preventing un-authorized users
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', ['as' => 'admin.dashboard', 'uses' => 'Admin\AdminBaseController@home']);
    Route::get('todo/index', ['as' => 'todo.index', 'uses' => 'Admin\ToDOController@index']);
    Route::get('todo/create', ['as' => 'todo.create', 'uses' => 'Admin\ToDOController@create']);
    Route::post('todo/save', ['as' => 'todo.store', 'uses' => 'Admin\ToDOController@store']);
    Route::get('todo/edit/{todo}', ['as' => 'todo.edit', 'uses' => 'Admin\ToDOController@edit']);
    Route::get('todo/show/{todo}', ['as' => 'todo.show', 'uses' => 'Admin\ToDOController@show']);
    Route::get('todo/delete/{todo}', ['as' => 'todo.delete', 'uses' => 'Admin\ToDOController@destroy']);
    Route::put('todo/update/{todo}', ['as' => 'todo.update', 'uses' => 'Admin\ToDOController@update']);
    Route::get('site-config/edit', ['as' => 'config.edit', 'uses' => 'Admin\ConfigController@edit']);
    Route::post('site-config/create', ['as' => 'config.create', 'uses' => 'Admin\ConfigController@store']);
    Route::put('site-config/update/{id}', ['as' => 'config.update', 'uses' => 'Admin\ConfigController@store']);
    Route::get('note/index', ['as' => 'note.index', 'uses' => 'Admin\NoteController@index']);
    Route::post('note/save',
                            [       'as'  => 'note.store',
                                    'uses' => 'Admin\NoteController@store',
                             ]);
    Route::resource('gallery', 'Admin\GalleryController');
    Route::resource('jcrop', 'Admin\JcropController');


    $this->get('artist/index', [
        'as'    =>  'artist.index',
        'uses'  =>  'Admin\ArtistController@index'
    ]);

    $this->get('artist/create', [
                'as'    =>  'artist.create',
                'uses'  =>  'Admin\ArtistController@create'
    ]);
    $this->post('artist/save', [
                'as'    =>  'artist.save',
                'uses'  =>  'Admin\ArtistController@save'
    ]);

    $this->get('artist/edit/{id}', [
                'as'    =>  'artist.edit',
                'uses'  =>  'Admin\ArtistController@edit'
    ]);

    $this->put('artist/update/{id}', [
                'as'    =>  'artist.update',
                'uses'  =>  'Admin\ArtistController@update'
    ]);

    $this->get('artist/delete/{id}', [
                'as'    =>  'artist.delete',
                'uses'  =>  'Admin\ArtistController@update'
    ]);

    $this->get('album/create', [
                'as'    =>  'album.create',
                'uses'  =>  'Admin\AlbumController@create'
    ]);
    $this->post('album/save', [
                'as'    =>  'album.save',
                'uses'  =>  'Admin\AlbumController@save'
    ]);

    $this->get('album/edit/{id}', [
                'as'    =>  'album.edit',
                'uses'  =>  'Admin\AlbumController@edit'
    ]);

    $this->put('album/update/{id}', [
                'as'    =>  'album.update',
                'uses'  =>  'Admin\AlbumController@update'
    ]);

    $this->get('album/delete/{id}', [
                'as'    =>  'album.delete',
                'uses'  =>  'Admin\AlbumController@update'
    ]);

});
