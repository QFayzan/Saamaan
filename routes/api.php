<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//functions for CRUD of users
Route::get('User','UsersController@index()');
Route::post('User','UserController@create()');
Route::get('User','UserController@show()');
Route::post('User','UserController@edit()');
Route::post('User','UserController@update()');
Route::post('User','UserController@destroy()');

