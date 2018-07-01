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

Route::resource('room-list', 'RoomsController');

Route::resource('booking', 'BookingController');

Route::get('test', function () {
    return view('test');
});

Route::resource('customer','CustomersController');

Route::get('booking', 'BookingController@getCustomers');

Route::get('/room-list/{id}/booking', 'BookingController@getCustomers');

Route::get('/getCustomers/{name}', 'BookingController@getCustomers');

Route::post('/room-list/{name}/booking', ['as' => '/room-list/{name}/booking', 'uses' => 'BookingController@save_data']);

Route::post('/room-list/{name}/booking/validate', function () {
    return view('validate');
});

