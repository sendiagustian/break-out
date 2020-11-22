<?php
                
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/','RestolienController@index');
    Route::get('/guide','RestolienController@guide');
    Route::get('/about','RestolienController@about');


    Route::get('/cek','CekController@index');
    Route::get('/welcome', function () {
        return view('welcome');
    });

    Auth::routes();
    
    
    

Route::group(['middleware' => ['block:2', 'block:3', 'block:4', 'block:5', 'block:6']], function(){      
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/users', 'UsersController@index');
    Route::get('/users/add/', 'UsersController@add');
    Route::post('/users/store/', 'UsersController@store');
    Route::get('/users/edit/{id}', 'UsersController@edit');
    Route::post('/users/update/{id}', 'UsersController@update');
    Route::delete('/users/delete/{id}', 'UsersController@delete');
    Route::get('/users/print', 'UsersController@cetak');

    Route::get('/menu', 'MenuController@index');
    Route::post('/menu/store/', 'MenuController@store');
    Route::get('/menu/edit/{id}', 'MenuController@edit');
    Route::post('/menu/update/{id}', 'MenuController@update');
    Route::delete('/menu/delete/{id}', 'MenuController@delete');
    Route::get('/menu/print', 'MenuController@cetak');
    
    Route::get('/category', 'CategoryController@index');
    Route::post('/category/store/', 'CategoryController@store');
    Route::get('/category/edit/{id}', 'CategoryController@edit');
    Route::post('/category/update/{id}', 'CategoryController@update');
    Route::delete('/category/delete/{id}', 'CategoryController@delete');
    Route::get('/category/print', 'CategoryController@cetak');

    
}) ;


Route::group(['middleware' => [ 'block:5', 'block:6']], function(){    
    Route::get('/reports', 'ReportsController@index');
    Route::post('/reports/store/', 'ReportsController@store');
    Route::get('/reports/edit/{id}', 'ReportsController@edit');
    Route::post('/reports/update/{id}', 'ReportsController@update');
    Route::delete('/reports/delete/{id}', 'ReportsController@delete');
    Route::get('/reports/print', 'ReportsController@cetak');
}) ;

Route::group(['middleware' => [ 'block:5', 'block:6']], function(){        
    Route::get('/payment', 'TransactionController@index');
    Route::post('/payment/store/', 'TransactionController@store');
    Route::get('/payment/edit/{id}', 'TransactionController@edit');
    Route::post('/payment/update/{id}', 'TransactionController@update');
    Route::delete('/payment/delete/{id}', 'TransactionController@delete');
    Route::get('/payment/print', 'TransactionController@cetak'); 

    Route::get('/history', 'TransactionController@history'); 
});

Route::group(['middleware' => ['block:2', 'block:3', 'block:5', 'block:6']], function(){        
    Route::get('/order', 'OrderController@index');
    Route::post('/order/store/', 'OrderController@store');
    Route::get('/order/edit/{id}', 'OrderController@edit');
    Route::post('/order/update/{id}', 'OrderController@update');
    Route::delete('/order/delete/{id}', 'OrderController@delete');
    Route::get('/order/print', 'OrderController@cetak');    
});

Route::group(['middleware' => ['block:2', 'block:6']], function(){            
    Route::get('/list-menu','RestolienController@listmenu');
    Route::post('/proses_pesanan','RestolienController@proses_pesanan');
    Route::get('/cart','RestolienController@cart');
    Route::post('/proses','RestolienController@proses') ;
    Route::post('/order/finish/', 'OrderController@finish');
    Route::get('/order/status/{id}', 'OrderController@order');
    Route::post('/order/verify/{id}', 'OrderController@verify');
    Route::post('/order/bayar/{id}', 'OrderController@bayar');
    Route::get('/order/invoice/{id}', 'OrderController@invoice');

});

Route::group(['middleware' => ['block:1', 'block:2', 'block:3', 'block:5']], function () {
    // register table
    Route::get('/table', 'TableeController@index');
    Route::post('/table/store', 'TableeController@store');
    
});

Route::group(['middleware' => ['block:1', 'block:2', 'block:4', 'block:5']], function () {

    // register waiter
    Route::get('/waiter', 'WaiterrController@index');
    Route::post('/waiter/store', 'WaiterrController@store');

    
});

Route::group(['middleware' => [ 'block:2', 'block:3', 'block:4']], function () {

    Route::get('/testimony', 'TestiController@index');
    Route::post('/testi/store', 'TestiController@store');
    Route::post('/testi/verify/{id}', 'TestiController@verify');
    Route::post('/testi/tolak/{id}', 'TestiController@tolak');
    Route::delete('/testi/delete/{id}', 'TestiController@delete');

    
});