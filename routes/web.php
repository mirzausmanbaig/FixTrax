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
Route::get('/users','UsersController@index');

Route::get('/vehicles','VehicleController@index');
Route::get('/vehicle/customer', 'VehicleController@vehicleCustomer');
Route::get('/vehicle/edit','VehicleController@vehicleEdit');
Route::get('/vehicle/customer/add','VehicleController@vehicleCustomerAdd');

Route::get('/customers', 'CustomerController@index');
Route::get('/customer/edit', 'CustomerController@customerEdit');
Route::get('/customer/add', 'CustomerController@customerAdd');

Route::get('/locations', 'LocationController@index');

Route::get('/settings', 'CompanyController@index');



