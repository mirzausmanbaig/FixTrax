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
Route::post('/login', 'UsersController@postLogin');
Route::get('/login/{id}', function($id){
    auth()->loginUsingId($id);
    return redirect('/customers');
});
Route::get('/logout','UsersController@logout');
Route::get('/register','UsersController@register');
Route::post('/register','UsersController@postRegister');
Route::get('/users','UsersController@index');
Route::get('/user/edit/{id}', 'UsersController@edit');
Route::post('/user/edit/{id}', 'UsersController@postEdit');
Route::get('/user/add', 'UsersController@add');
Route::post('/user/add', 'UsersController@postAdd');
Route::get('/user/delete/{id}', 'UsersController@deleteUser');
Route::get('/userProfile/edit/{id}', 'UsersController@userProfileEdit');
Route::post('/userProfile/edit/{id}', 'UsersController@userProfilePostEdit');


Route::get('/vehicles','VehicleController@index');
Route::get('/vehicle/delete/{id}', 'VehicleController@vehicleDelete');
Route::get('/vehicle/edit/{id}', 'VehicleController@vehicleEdit');
Route::post('/vehicle/edit/{id}', 'VehicleController@vehiclePostEdit');
Route::get('/vehicle/add', 'VehicleController@vehicleAdd');
Route::post('/vehicle/add', 'VehicleController@vehiclePostAdd');

Route::get('/vehicle/customer/{id}', 'VehicleController@vehicleCustomer');
Route::get('/vehicle/customer/edit/{id}','VehicleController@vehicleCustomerEdit');
Route::post('vehicle/customer/edit/{id}','VehicleController@vehicleCustomerPostEdit');
Route::get('/vehicle/customer/delete/{id}', 'VehicleController@vehicleCustomerDelete');
Route::get('/vehicle/customer/add/{id}','VehicleController@vehicleCustomerAdd');
Route::post('/vehicle/customer/add/{id}', 'VehicleController@vehicleCustomerPostAdd');

Route::get('/customers', 'CustomerController@index');
Route::get('/customer/edit/{id}', 'CustomerController@customerEdit');
Route::get('/delete/{id}', 'CustomerController@deleteCustomer');
Route::post('/customer/edit/{id}', 'CustomerController@customerPostEdit');
Route::get('/customer/add', 'CustomerController@customerAdd');
Route::post('/customer/add', 'CustomerController@customerRegister');

Route::get('/locations', 'LocationController@index');
Route::get('/location/edit/{id}', 'LocationController@locationEdit');
Route::post('/location/edit/{id}', 'LocationController@locationPostEdit');
Route::get('/location/add', 'LocationController@locationAdd');
Route::post('/location/add', 'LocationController@locationPostAdd');

Route::get('/settings', 'CompanyController@index');
Route::post('/company/edit/{id}', 'CompanyController@edit');

Route::get('/mailRegistration', function(){
    return view('mail.registration');
});
Route::get('/resend', function(){
    return view('mail.resend');
});


