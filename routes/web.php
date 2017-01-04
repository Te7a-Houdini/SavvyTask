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

/****** user  routes ******/
Route::get('/user/index', ['as' => 'user.index' ,'uses' => 'UserController@index']);
Route::get('/user/{user}', ['as' => 'user.show' ,'uses' => 'UserController@show']);
Route::get('/user/{user}/edit', ['as' => 'user.edit' ,'uses' => 'UserController@edit']);
Route::patch('/user/{user}', ['as' => 'user.update' ,'uses' => 'UserController@update']);
Route::delete('/user/{user}', ['as' => 'user.delete', 'uses' => 'UserController@destroy']);

Route::get('/home', 'HomeController@index');
