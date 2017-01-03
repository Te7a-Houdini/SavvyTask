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
    return 'welcome to savvy task';
});

Auth::routes();

Route::get('/user/index',['as' => 'user.index' ,'uses' => 'UserController@index']);



Route::get('/home', 'HomeController@index');
