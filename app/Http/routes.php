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


Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);

Route::get('/about', ['uses' => 'HomeController@about', 'as' => 'about']);

Route::get('/comments', ['uses' => 'HomeController@comments', 'as' => 'comments']);

Route::post('/comments', ['uses' => 'HomeController@addComment', 'as' => 'addComment']);

Route::get('/order', ['uses' => 'HomeController@order', 'as' => 'order']);

Route::post('/order', ['uses' => 'HomeController@addOrder', 'as' => 'addOrder']);

Route::get('/admin', ['uses' => 'HomeController@admin', 'as' => 'admin']);

Route::post('/admin', ['uses' => 'HomeController@adminLogin', 'as' => 'admin']);