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
    Route::name('create_transport_path')->get('/transports/create', 'Transport\TransportsController@create'); 
    Route::name('store_transport_path')->post('/transports', 'Transport\TransportsController@store');
    Route::name('edit_transport_path')->get('/transports/{transport}/edit', 'Transport\TransportsController@edit');
    Route::name('update_transport_path')->put('/transports/{transport}', 'Transport\TransportsController@update');
    Route::name('delete_transport_path')->delete('/transports/{transport}', 'Transport\TransportsController@delete');
    
    //Transport active
    Route::name('create_transport_active_path')->get('/transports_active/create', 'Transport\TransportActiveController@create'); 
    Route::name('store_transport_active_path')->post('/transports_active', 'Transport\TransportActiveController@store');
    Route::name('edit_transport_active_path')->get('/transports_active/{atransport}/edit', 'Transport\TransportActiveController@edit');
    Route::name('update_transport_active_path')->put('/transports_active/{atransport}', 'Transport\TransportActiveController@update');
    Route::name('delete_transport_active_path')->delete('/transports_active/{atransport}', 'Transport\TransportActiveController@delete');

    //Model Transport
    Route::name('create_modeltransport_path')->get('/modeltransports/create', 'Transport\ModelTransportController@create'); 
    Route::name('store_modeltransport_path')->post('/modeltransports', 'Transport\ModelTransportController@store');
    Route::name('edit_modeltransport_path')->get('/modeltransports/{modeltransport}/edit', 'Transport\ModelTransportController@edit');
    Route::name('update_modeltransport_path')->put('/modeltransports/{modeltransport}', 'Transport\ModelTransportController@update');
    Route::name('delete_modeltransport_path')->delete('/modeltransports/{modeltransport}', 'Transport\ModelTransportController@delete');

    //BSMT
    Route::name('create_bsmt_path')->get('/bsmts/create', 'Bsmt\BsmtController@create'); 
    Route::name('store_bsmt_path')->post('/bsmts', 'Bsmt\BsmtController@store');
    Route::name('edit_bsmt_path')->get('/bsmts/{bsmt}/edit', 'Bsmt\BsmtController@edit');
    Route::name('update_bsmt_path')->put('/bsmts/{bsmt}', 'Bsmt\BsmtController@update');
    Route::name('delete_bsmt_path')->delete('/bsmts/{bsmt}', 'Bsmt\BsmtController@delete');
    
    //VENDOR-BSMT
    Route::name('create_vbsmt_path')->get('/bsmtvendors/create', 'Bsmt\VendorBsmtController@create'); 
    Route::name('store_vbsmt_path')->post('/bsmtvendors', 'Bsmt\VendorBsmtController@store');
    Route::name('edit_vbsmt_path')->get('/bsmtvendors/{vbsmt}/edit', 'Bsmt\VendorBsmtController@edit');
    Route::name('update_vbsmt_path')->put('/bsmtvendors/{vbsmt}', 'Bsmt\VendorBsmtController@update');
    Route::name('delete_vbsmt_path')->delete('/bsmtvendors/{vbsmt}', 'Bsmt\VendorBsmtController@delete');
    
    //STATUS-BSMT
    Route::name('create_sbsmt_path')->get('/bsmtstatus/create', 'Bsmt\BstmStatusController@create'); 
    Route::name('store_sbsmt_path')->post('/bsmtstatus', 'Bsmt\BstmStatusController@store');
    Route::name('edit_sbsmt_path')->get('/bsmtstatus/{sbsmt}/edit', 'Bsmt\BstmStatusController@edit');
    Route::name('update_sbsmt_path')->put('/bsmtstatus/{sbsmt}', 'Bsmt\BstmStatusController@update');
    Route::name('delete_sbsmt_path')->delete('/bsmtstatus/{sbsmt}', 'Bsmt\BstmStatusController@delete');
    
    
    
});

Route::get('/', 'HomeController@index');

//Post not auth
Route::name('posts_path')->get('/posts', 'PostsController@index');
Route::name('post_path')->get('/posts/{post}', 'PostsController@show');

//Transport not auth
Route::name('transports_path')->get('/transports', 'Transport\TransportsController@index');
Route::name('transport_path')->get('/transports/{transport}', 'Transport\TransportsController@show');

//BSMT not auth
Route::name('bsmts_path')->get('/bsmts','Bsmt\BsmtController@index');
Route::name('bsmt_path')->get('/bsmts/{bsmt}','Bsmt\BsmtController@show');

//Vendor BSMT not auth
Route::name('vbsmts_path')->get('/bsmtvendors','Bsmt\VendorBsmtController@index');
Route::name('vbsmt_path')->get('/bsmtvendors/{vbsmt}','Bsmt\VendorBsmtController@show');

//Status BSMT not auth
Route::name('sbsmts_path')->get('/bsmtstatus','Bsmt\BstmStatusController@index');
Route::name('sbsmt_path')->get('/bsmtstatus/{sbsmt}','Bsmt\BstmStatusController@show');

//Transport active not auth
Route::name('transports_active_path')->get('/transports_active', 'Transport\TransportActiveController@index');
Route::name('transport_active_path')->get('/transports_active/{atransport}', 'Transport\TransportActiveController@show');

//Transport not auth
Route::name('modeltransports_path')->get('/modeltransports', 'Transport\ModelTransportController@index');
Route::name('modeltransport_path')->get('/modeltransports/{modeltransport}', 'Transport\ModelTransportController@show');