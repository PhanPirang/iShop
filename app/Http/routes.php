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

Route::get('user', function () {
    return view('admin.user');
});

// Category
Route::get('category', 'CategoryController@getAll');

Route::post('category/add', 'CategoryController@store');

Route::post('category/destroy', 'CategoryController@destroy');

Route::post('category/update', 'CategoryController@update');

// Product
Route::get('product/list', function () {
    return view('admin.product_list');
});

Route::get('product', 'ProductController@getAll');

Route::post('product/add', 'ProductController@store');

Route::get('product/update', function () {
    return view('admin.product_update');
});

Route::get('user', function () {
    return view('admin.user');
});

Route::get('slide', function () {
    return view('admin.slide');
});


