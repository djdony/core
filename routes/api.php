<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::resource('settings', 'SettingAPIController');
Route::resource('faqs', 'FaqAPIController');



Route::group(['prefix' => 'admin'], function () {
    Route::resource('car_types', 'CarTypeAPIController');
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('cars', 'CarAPIController');
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('locations', 'LocationAPIController');
});
