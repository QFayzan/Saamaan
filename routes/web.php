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

Route::get('/', 'HomeController@home');
Route::get('rates', 'HomeController@rates')->name('rates');
Route::redirect('/home','/');
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
Route::delete('/users/{user}','usersController@destroy')->name('user.delete');
//Driver Routes
Route::get('/drivers','driverscontroller@index');
Route::get('/drivers/create','driverscontroller@create')->name('drivers.create');
Route::post('/drivers/store','driverscontroller@store')->name('drivers.store');
Route::get('/drivers/{driver}','driverscontroller@show');
Route::get('/drivers/orders/previous','driverscontroller@previous')->name('drivers.previous');
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
Route::get('/order/{order}/details/{order_details}/edit','order_detailscontroller@edit')->name('details.edit');
Route::patch('/details/{detail}','order_detailscontroller@update')->name('details.update');
Route::delete('/order/{order}/details/{order_details}','order_detailscontroller@destroy');
//Admin panel stuff here put in user controller in admin() function

Route::resource('categories', 'OrderCategoryController');
Route::resource('organizations', 'OrganizationController');

Route::get('/admin/','userscontroller@admin')->name('admin');
Route::post('/admin/promote/{driver}','admincontroller@promote')->name('admin.promote');
Route::post('/admin/demote/{driver}','admincontroller@refuse')->name('admin.refuse');
Route::get('/admin/users','admincontroller@users')->name('admin.view.users');
Route::delete('/admin/users/{user}','admincontroller@deleteUser')->name('admin.user.delete');
Route::get('/admin/users/edit/{user}','admincontroller@editUser')->name('admin.user.edit');
Route::patch('/admin/users/update/{user}','admincontroller@deleteUser')->name('admin.user.update');
Route::get('/admin/orders','admincontroller@orders')->name('admin.view.orders');
Route::get('/admin/current','admincontroller@current_orders')->name('admin.view.current');
//Route::get('/home', 'HomeController@index')->name('home');
Route::view('test','test');
//Map testing here

//Contact and about page go here
Route::view('/contact','contact')->name('contact');
Route::view('/about','about')->name('about');
//Search function here
Route::get( '/search', function () {
    $q = Input::get ( 'q' );
$user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
if (count ( $user ) > 0)
    return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
else
    return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
} );