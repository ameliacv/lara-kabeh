<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin'], function() {
  Route::resource('/hotel', 'HotelController');
  Route::resource('/staff', 'StaffController');
  Route::resource('/room', 'KamarController');
});
Route::group(['prefix' => 'staff'], function() {
  Route::resource('/book', 'BookController');
});

Route::resource('/data', 'DataController');
