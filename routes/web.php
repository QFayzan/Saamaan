<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//User Routes
Route::get('/users', 'userscontroller@index');
Route::get('/users/create','usersController@create');
Route::post('/users/store','usersController@store')->name('user.store');
Route::get('/users/{user}','usersController@show');
Route::get('/users/{user}/edit','usersController@edit');
Route::patch('/users/{user}','usersController@update');
Route::delete('/users/{user}','usersController@destroy');
//Driver Routes
Route::get('/drivers','driverscontroller@index');
Route::get('/drivers/create','driverscontroller@create');
Route::post('/drivers/store','driverscontroller@store')->name('drivers.store');
Route::get('/drivers/{driver}','drivercontroller@show');
Route::get('/drivers/{driver}/edit','drivercontoller@edit');
Route::patch('/drivers/{driver}','drivercontroller@update');
Route::delete('/drivers/{driver}','drivercontroller@destroy');
//Vehicle Routes
Route::get('/vehicles','vehcilescontroller@index');
Route::get('/vehicles/create','vehcilescontroller@create');
Route::post('/vehicles/store','vehcilescontroller@store')->name('vehicles.store');
Route::get('/vehicles/{vehicle}','vehcilescontroller@show');
Route::get('/vehicles/{vehicle}/edit','vehcilescontroller@edit');
Route::patch('/vehicles/{vehicle}','vehcilescontroller@update');
Route::delete('/vehicles/{vehicle}','vehcilescontroller@destroy');
//Order Routes
Route::get('/orders','orderscontroller@index');
Route::get('/orders/create','orderscontroller@create');
Route::post('/orders/store','orderscontroller@store')->name('orders.store');
Route::get('/orders/{order}','orderscontroller@show');
Route::get('/orders/{order}/edit','orderscontroller@edit');
Route::patch('/orders/{order}','orderscontroller@update');
Route::delete('/orders/{order}','orderscontroller@destroy');
//Order_details Routes
Route::get('/order_details','vehcilescontroller@index');
Route::get('/order_details/create','vehcilescontroller@create');
Route::post('/order_details/store','vehcilescontroller@store')->name('vehicles.store');
Route::get('/order_details/{order_details}','vehcilescontroller@show');
Route::get('/order_details/{order_details}/edit','vehcilescontroller@edit');
Route::patch('/order_details/{order_details}','vehcilescontroller@update');
Route::delete('/order_details/{order_details}','vehcilescontroller@destroy');


