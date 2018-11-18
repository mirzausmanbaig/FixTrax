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
Route::get('/login1','UsersController@login');
Route::get('/register1','UsersController@register');
Route::post('/register1','UsersController@postRegister');
Route::get('/users','UsersController@index');


Route::get('/vehicles','VehicleController@index');
Route::get('/vehicle/customer/{id}', 'VehicleController@vehicleCustomer');
Route::get('/vehicle/customer/edit/{id}','VehicleController@vehicleCustomerEdit');
Route::get('/vehicle/customer/add','VehicleController@vehicleCustomerAdd');

Route::get('/customers', 'CustomerController@index');
Route::get('/customer/edit/{id}', 'CustomerController@customerEdit');
Route::get('/delete/{id}', 'CustomerController@deleteCustomer');
Route::post('/customer/edit/{id}', 'CustomerController@customerPostEdit');
Route::get('/customer/add', 'CustomerController@customerAdd');
Route::post('/customer/add', 'CustomerController@customerRegister');

Route::get('/locations', 'LocationController@index');

Route::get('/settings', 'CompanyController@index');

Route::get('/mailRegistration', function(){
    return view('mail.registration');
});
Route::get('/resend', function(){
    return view('mail.resend');
});


