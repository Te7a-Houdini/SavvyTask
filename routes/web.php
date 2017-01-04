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


Auth::routes();

Route::group(['middleware' => 'auth'] , function () {

    /****** user  routes ******/
    Route::get('/user/index', ['as' => 'user.index' ,'uses' => 'UserController@index']);
    Route::get('/user/{user}', ['as' => 'user.show' ,'uses' => 'UserController@show']);
    Route::get('/user/{user}/edit', ['as' => 'user.edit' ,'uses' => 'UserController@edit']);
    Route::patch('/user/{user}', ['as' => 'user.update' ,'uses' => 'UserController@update']);
    Route::delete('/user/{user}', ['as' => 'user.delete', 'uses' => 'UserController@destroy']);

    /******** category routes *******/
    Route::resource('category', 'CategoryController');

    /******** post routes *******/
    Route::resource('post', 'PostController');


});

Route::group(['prefix' => LaravelLocalization::setLocale() , 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]], function() {
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@indexCategories']);
    Route::get('/home/{category}', ['as' => 'home.category', 'uses' => 'HomeController@showCategory']);
    Route::get('/home/{post}/readMore', ['as' => 'home.readMore', 'uses' => 'HomeController@readMore']);

});