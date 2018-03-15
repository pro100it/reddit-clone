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
    
    //
    Route::name('create_bsmt_path')->get('/bsmts/create', 'BsmtController@create'); 
    Route::name('store_bsmt_path')->post('/bsmts', 'BsmtController@store');
    Route::name('edit_bsmt_path')->get('/bsmts/{bsmt}/edit', 'BsmtController@edit');
    Route::name('update_bsmt_path')->put('/bsmts/{bsmt}', 'BsmtController@update');
    Route::name('delete_bsmt_path')->delete('/bsmts/{bsmt}', 'BsmtController@delete');

});

Route::get('/', 'HomeController@index');

Route::name('posts_path')->get('/posts', 'PostsController@index');
Route::name('post_path')->get('/posts/{post}', 'PostsController@show');

Route::name('transports_path')->get('/transports', 'TransportsController@index');
Route::name('transport_path')->get('/transports/{transport}', 'TransportsController@show');


//BSMT
Route::name('bsmts_path')->get('/bsmts','BsmtController@index');
Route::name('bsmt_path')->get('/bsmts/{bsmt}','BsmtController@show');


