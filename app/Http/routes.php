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

Route::get('/','Home\IndexController@index');
Route::any('/register','Home\UserController@register');
Route::post('/login','Home\UserController@login');
Route::get('/signOut','Home\UserController@signOut');
Route::group(['namespace'=>'Home','middleware'=>'user'],function(){
    Route::get('/home','UserController@home');
});
Route::group(['namespace'=>'Admin','middleware'=>'admin'],function(){
    Route::get('/Admin','IndexController@index');
    Route::get('/Admin/user','UserController@index');
    Route::any('/Admin/newuser','UserController@newuser');
    Route::any('/Admin/user/profile','UserController@profile');
    Route::any('/Admin/user/drop','UserController@drop');
    Route::any('/Admin/user/modify','UserController@modify');
    Route::any('/Admin/grant/role','GrantController@role');
    Route::any('/Admin/grant/addRole','GrantController@addRole');
    Route::any('/Admin/grant/dropRole','GrantController@dropRole');
});

Route::any('/AdminLogin','Admin\LoginController@login');
Route::any('/Admin/layout','Admin\LoginController@layout');
