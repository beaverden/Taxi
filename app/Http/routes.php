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

/** USER PAGES **/
    Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);

    Route::get('about', ['uses' => 'HomeController@about', 'as' => 'about']);

    Route::get('comments', ['uses' => 'HomeController@comments', 'as' => 'comments']);

    Route::post('comments', ['uses' => 'HomeController@addComment', 'as' => 'addComment']);

    Route::get('order', ['uses' => 'HomeController@order', 'as' => 'order']);

    Route::post('order', ['uses' => 'HomeController@addOrder', 'as' => 'addOrder']);
/** /.USER PAGES **/

    
/** ADMIN PAGES **/
    Route::get('admin', ['uses' => 'AdminController@admin', 'as' => 'admin']);

    Route::post('admin', ['uses' => 'AdminController@adminLogin', 'as' => 'admin']);

/** ORDERS **/
    Route::get('admin/orders', ['uses' => 'AdminController@adminOrders', 'as' => 'adminOrders']);

    Route::get('admin/orders/done', ['uses' => 'AdminController@ordersDone', 'as' => 'ordersDone']);

    Route::get('admin/orders/erased', ['uses' => 'AdminController@ordersErased', 'as' => 'ordersErsed']);

    //Route for changing the status
    Route::post('admin/orderStatus', ['uses' => 'AdminController@orderStatus', 'as' => 'orderStatus']);
/** /.ORDERS **/
    
    Route::post('admin/blockUser', ['uses' => 'AdminController@blockUser', 'as' => 'blockUser']);
    
    Route::get('admin/comments', ['uses' => 'AdminController@adminComments', 'as' => 'adminComments']);

    Route::get('admin/general', ['uses' => 'AdminController@adminGeneral', 'as' => 'adminGeneral']);

    Route::post('admin/finishOrder', ['uses' => 'AdminController@finishOrder', 'as' => 'finishOrder']);

    Route::post('admin/eraseOrder', ['uses' => 'AdminController@eraseOrder', 'as' => 'eraseOrder']);
/** /.ADMIN PAGES **/