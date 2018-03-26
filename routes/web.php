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
    
    Route::name('create_transport_active_path')->get('/transports_active/create', 'TransportActiveController@create'); 
    Route::name('store_transport_active_path')->post('/transports_active', 'TransportActiveController@store');
    Route::name('edit_transport_active_path')->get('/transports_active/{atransport}/edit', 'TransportActiveController@edit');
    Route::name('update_transport_active_path')->put('/transports_active/{atransport}', 'TransportActiveController@update');
    Route::name('delete_transport_active_path')->delete('/transports_active/{atransport}', 'TransportActiveController@delete');

    //BSMT
    Route::name('create_bsmt_path')->get('/bsmts/create', 'BsmtController@create'); 
    Route::name('store_bsmt_path')->post('/bsmts', 'BsmtController@store');
    Route::name('edit_bsmt_path')->get('/bsmts/{bsmt}/edit', 'BsmtController@edit');
    Route::name('update_bsmt_path')->put('/bsmts/{bsmt}', 'BsmtController@update');
    Route::name('delete_bsmt_path')->delete('/bsmts/{bsmt}', 'BsmtController@delete');
    
    //VENDOR-BSMT
    Route::name('create_vbsmt_path')->get('/bsmtvendors/create', 'VendorBsmtController@create'); 
    Route::name('store_vbsmt_path')->post('/bsmtvendors', 'VendorBsmtController@store');
    Route::name('edit_vbsmt_path')->get('/bsmtvendors/{vbsmt}/edit', 'VendorBsmtController@edit');
    Route::name('update_vbsmt_path')->put('/bsmtvendors/{vbsmt}', 'VendorBsmtController@update');
    Route::name('delete_vbsmt_path')->delete('/bsmtvendors/{vbsmt}', 'VendorBsmtController@delete');
    
    //STATUS-BSMT
    Route::name('create_sbsmt_path')->get('/bsmtstatus/create', 'BstmStatusController@create'); 
    Route::name('store_sbsmt_path')->post('/bsmtstatus', 'BstmStatusController@store');
    Route::name('edit_sbsmt_path')->get('/bsmtstatus/{sbsmt}/edit', 'BstmStatusController@edit');
    Route::name('update_sbsmt_path')->put('/bsmtstatus/{sbsmt}', 'BstmStatusController@update');
    Route::name('delete_sbsmt_path')->delete('/bsmtstatus/{sbsmt}', 'BstmStatusController@delete');
    
    
    
});

Route::get('/', 'HomeController@index');

//Post not auth
Route::name('posts_path')->get('/posts', 'PostsController@index');
Route::name('post_path')->get('/posts/{post}', 'PostsController@show');

//Transport not auth
Route::name('transports_path')->get('/transports', 'TransportsController@index');
Route::name('transport_path')->get('/transports/{transport}', 'TransportsController@show');

//BSMT not auth
Route::name('bsmts_path')->get('/bsmts','BsmtController@index');
Route::name('bsmt_path')->get('/bsmts/{bsmt}','BsmtController@show');

//Vendor BSMT not auth
Route::name('vbsmts_path')->get('/bsmtvendors','VendorBsmtController@index');
Route::name('vbsmt_path')->get('/bsmtvendors/{vbsmt}','VendorBsmtController@show');

//Status BSMT not auth
Route::name('sbsmts_path')->get('/bsmtstatus','BstmStatusController@index');
Route::name('sbsmt_path')->get('/bsmtstatus/{sbsmt}','BstmStatusController@show');

//Transport not auth
Route::name('transports_active_path')->get('/transports_active', 'TransportActiveController@index');
Route::name('transport_active_path')->get('/transports_active/{atransport}', 'TransportActiveController@show');