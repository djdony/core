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
Route::resource('settings', 'API\SettingAPIController');

Auth::routes(['verify' => true]);

Route::get('/admin/', 'HomeController@index')->middleware('verified');


Route::group(['prefix' => 'admin'], function () {
    Route::resource('settings', 'SettingController', ["as" => 'admin']);
    Route::resource('faqs', 'FaqController', ["as" => 'admin']);
    Route::resource('carTypes', 'CarTypeController', ["as" => 'admin']);
    Route::resource('images', 'ImageController', ["as" => 'admin']);
    Route::resource('cars', 'CarController', ["as" => 'admin']);
    Route::resource('locations', 'LocationController', ["as" => 'admin']);
    Route::resource('drivers', 'DriverController', ["as" => 'admin']);
});


Route::view('/', 'api');


