<?php

Auth::routes(['verify' => true]);

Route::get('/admin/', 'HomeController@index')->middleware('verified');

Route::view('/{any}', 'api')->where('any', '.*');
