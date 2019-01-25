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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//User Routes
Route::get('/users/dashboard', 'userscontroller@index')->name('dashboard');
Route::get('/users/create','usersController@create');
Route::post('/users/store','usersController@store')->name('user.store');
Route::get('/users/display','usersController@show')->name('user.show');
Route::get('/users/admindisplay','usersController@adminshow')->name('user.adminshow');
Route::get('/users/{user}/edit','usersController@edit')->name('user.edit');
Route::get('/users/{user}/adminedit','usersController@adminedit')->name('user.adminedit');
Route::get('user/password', 'usersController@password')->name('user.password');
Route::patch('user/password/{user}', 'usersController@changePassword')->name('user.changePass');
Route::patch('/users/{user}/update','usersController@update')->name('user.update');
Route::delete('/users/{user}','usersController@destroy');
//Driver Routes
Route::get('/drivers','driverscontroller@index');
Route::get('/drivers/create','driverscontroller@create')->name('drivers.create');
Route::post('/drivers/store','driverscontroller@store')->name('drivers.store');
Route::get('/drivers/{driver}','driverscontroller@show');
Route::get('/drivers/{driver}/edit','driverscontoller@edit');
Route::patch('/drivers/{driver}','driverscontroller@update');
Route::delete('/drivers/{driver}','driverscontroller@destroy')->name('drivers.destroy');
// New Routes to make sense
Route::post('driver/pick/{order}', 'driversController@pickOrder')->name('driver.pick.order');
Route::post('driver/completed/{order}', 'driversController@completedOrder')->name('driver.completed.order');

//Vehicle Routes
Route::get('/vehicles','vehcilescontroller@index');
Route::get('/vehicles/create','vehcilescontroller@create');
Route::post('/vehicles/store','vehcilescontroller@store')->name('vehicles.store');
Route::get('/vehicles/{vehicle}','vehcilescontroller@show');
Route::get('/vehicles/{vehicle}/edit','vehcilescontroller@edit');
Route::patch('/vehicles/{vehicle}','vehcilescontroller@update');
Route::delete('/vehicles/{vehicle}','vehcilescontroller@destroy');
//Order Routes
Route::get('/orders','orderscontroller@index')->name('orders.index');
Route::get('/orders/create','orderscontroller@create')->name('orders.create');
Route::post('/orders/store','orderscontroller@store')->name('orders.store');
Route::get('/orders/display','ordersController@show')->name('orders.display');
Route::get('/orders/{order}/edit','orderscontroller@edit');
Route::patch('/orders/{order}','orderscontroller@update');
Route::delete('/orders/{order}','orderscontroller@destroy');
//Order_details Routes
Route::get('/order/{order}/details/','order_detailscontroller@index');
Route::get('/order/{order}/details/create','order_detailscontroller@create')->name('details.create');
Route::post('/order/{order}/details/store','order_detailscontroller@store')->name('details.store');
Route::get('/order/{order}/details/{order_details}','order_detailscontroller@show')->name('details.show');
Route::get('/order/{order}/details/{order_details}/edit','order_detailscontroller@edit');
Route::patch('/order/{order}/details/{order_details}','order_detailscontroller@update');
Route::delete('/order/{order}/details/{order_details}','order_detailscontroller@destroy');
//Admin panel stuff here put in user controller in admin() function
Route::get('/admin/','userscontroller@admin')->name('admin');
Route::get('/admin/promote/{driver}','admincontroller@promote')->name('admin.promote');
Route::get('/admin/demote/{driver}','admincontroller@refuse')->name('admin.refuse');
//Route::get('/home', 'HomeController@index')->name('home');
Route::view('test','test');
//Map testing here

//Contact and about page go here
Route::get('/contact','userscontroller@contact')->name('contact');
Route::get('/about','userscontroller@about')->name('about');