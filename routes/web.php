<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Static pages
Route::get('/', 'Frontend\HomeController@getIndex');
Route::get('/about', 'Frontend\HomeController@getAbout');
Route::get('/contact', 'Frontend\HomeController@getContact');

// Cart routes
Route::group(['prefix' => 'cart'], function() {
    Route::get('/', 'Frontend\CartController@getCart');
});

// Checkout routes
Route::group(['prefix' => 'checkout'], function() {
    Route::get('/', 'Frontend\CheckoutController@getCheckout');
    Route::get('/complete', 'Frontend\CheckoutController@getComplete');
});

// Product routes
Route::group(['prefix' => 'product'], function() {
    Route::get('/shop', 'Frontend\ProductController@getShop');
    Route::get('/detail', 'Frontend\ProductController@getDetail');
});

// backend

Route::group(['prefix' => 'admin'], function () {
    
    // Home routes
    Route::get('/', function () {
        return view('backend.index');
    });
    
    // User routes
    // Route::get('users', 'Backend.UserController@getList');
    // Route::get('users/edit/{id}', 'Backend.UserController@getEdit');
    // Route::post('users/edit/{id}', 'Backend.UserController@postEdit');
    // Route::get('users/add', 'Backend.UserController@getAdd');
    // Route::post('users/add', 'Backend.UserController@postAdd');
    Route::resource('user', 'Backend\UserController');

    // Product routes
    Route::resource('product', 'Backend\ProductController');

    // Category routes
    Route::resource('category', 'Backend.CategoryController');
});


