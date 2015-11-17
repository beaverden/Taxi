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
/** HOME CONTROLLER **/
        Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);

        Route::get('about', ['uses' => 'HomeController@about', 'as' => 'about']);

        Route::get('comments', ['uses' => 'HomeController@comments', 'as' => 'comments']);

        Route::post('comments', ['uses' => 'HomeController@addComment', 'as' => 'addComment']);

        Route::get('order', ['uses' => 'HomeController@order', 'as' => 'order']);

        Route::post('order', ['uses' => 'HomeController@addOrder', 'as' => 'addOrder']);
/** /.HOME CONTROLLER **/
    
/** ADMIN CONTROLLER **/
        Route::get('admin', ['uses' => 'AdminController@admin', 'as' => 'admin']);

        Route::post('admin', ['uses' => 'AdminController@adminLogin', 'as' => 'admin']);

    /** ORDERS **/
        Route::get('admin/orders', ['uses' => 'AdminController@adminOrders', 'as' => 'adminOrders']);

        Route::get('admin/orders/done', ['uses' => 'AdminController@ordersDone', 'as' => 'ordersDone']);

        Route::get('admin/orders/erased', ['uses' => 'AdminController@ordersErased', 'as' => 'ordersErsed']);

        //Route for changing the status
        Route::post('admin/orderStatus', ['uses' => 'AdminController@orderStatus', 'as' => 'orderStatus']);
    /** /.ORDERS **/


    /** COMMENTS **/
        Route::get('admin/comments', ['uses' => 'AdminController@adminComments', 'as' => 'adminComments']);

        Route::post('admin/deleteComment', ['uses' => 'AdminController@deleteComment', 'as' => 'deleteComment']);
    /** /.COMMENTS **/


    /** GENERAL **/
        Route::get('admin/general', ['uses' => 'AdminSettingsController@adminGeneral', 'as' => 'adminGeneral']);
        
        Route::get('admin/general/password', ['uses' => 'AdminSettingsController@generalPassword', 'as' => 'generalPassword']);
        
        Route::post('admin/general/password', ['uses' => 'AdminSettingsController@changePassword', 'as' => 'changePassword']);
    /** /.GENERAL **/   
        
        
        Route::post('admin/blockUser', ['uses' => 'AdminController@blockUser', 'as' => 'blockUser']);

        Route::get('admin/exit', ['uses' => 'AdminController@logout', 'as' => 'logout']);

        
/** /.ADMIN PAGES **/