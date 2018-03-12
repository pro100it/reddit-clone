<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    //Home
    Route::get('/home', 'HomeController@index');
    //Blogs
    Route::name('create_post_path')->get('/posts/create', 'PostsController@create');
    Route::name('store_post_path')->post('/posts', 'PostsController@store');
    Route::name('edit_post_path')->get('/posts/{post}/edit', 'PostsController@edit');
    Route::name('update_post_path')->put('/posts/{post}', 'PostsController@update');
    Route::name('delete_post_path')->delete('/posts/{post}', 'PostsController@delete');
  
    //Transport
    Route::name('create_transport_path')->get('/transports/create', 'TransportsController@create'); 
    Route::name('store_transport_path')->post('/transports', 'TransportsController@store');
    Route::name('edit_transport_path')->get('/transports/{transport}/edit', 'TransportsController@edit');
    Route::name('update_transport_path')->put('/transports/{transport}', 'TransportsController@update');
    Route::name('delete_transport_path')->delete('/transports/{transport}', 'TransportsController@delete');
    
    
});

Route::get('/', 'HomeController@index');
Route::name('posts_path')->get('/posts', 'PostsController@index');
Route::name('post_path')->get('/posts/{post}', 'PostsController@show');
Route::name('transports_path')->get('/transports', 'TransportsController@index');
Route::name('transport_path')->get('/transports/{transport}', 'TransportsController@show');

