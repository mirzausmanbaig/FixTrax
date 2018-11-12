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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login','UsersController@login');
Route::get('/register','UsersController@register');

Route::get('/vehicles','VehicleController@index');

Route::get('/customers', 'CustomerController@index');

Route::get('/locations', 'LocationController@index');



