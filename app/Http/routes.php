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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('user', function () {
    return view('admin.user');
});



// Category
Route::get('admin/category', 'CategoryController@getAll');

Route::post('admin/category/add', 'CategoryController@store');

Route::post('admin/category/destroy', 'CategoryController@destroy');

Route::post('admin/category/update', 'CategoryController@update');

// Product
Route::get('admin/product/list', function () {
    return view('admin.product_list');
});

Route::get('admin/product', 'ProductController@getAll');

Route::post('admin/product/add', 'ProductController@store');

Route::get('admin/product/update', function () {
    return view('admin.product_update');
});



Route::get('user', function () {
    return view('admin.user');
});



Route::get('admin/slide', 'SlideController@getAll');

Route::post('admin/slide/add', 'SlideController@store');

Route::post('admin/slide/destroy', 'SlideController@destroy');

Route::post('admin/slide/update', 'SlideController@update');

Route::get('/', 'SlideController@getSlideShow');

Route::get('single/{id}', 'ProductController@getRecord');