<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace'=>'Admin','middleware'=>'admin'],function(){
    Route::get('/Admin','IndexController@index');
    Route::get('/Admin/user','UserController@index');
    Route::any('/Admin/newuser','UserController@newuser');
});

Route::any('/AdminLogin','Admin\LoginController@login');
Route::any('/Admin/layout','Admin\LoginController@layout');
