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

Route::get('category', function () {
    return view('admin.category');
});

//Route::post('category/add', 'CategoryController@index');

Route::post('category/add', function(){
    return Input::get('name');
});

Route::get('category', function(){
    return view('admin.category');
});

Route::get('product/list', function () {
    return view('admin.product_list');
});

Route::get('product/update', function () {
    return view('admin.product_update');
});


