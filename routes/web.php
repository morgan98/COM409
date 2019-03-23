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

Route::get('/', 'WelcomePageController@index')->name('Home Page');

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});


Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('product', function () {
    return view('product');
});

Route::get('shop', 'ShopController@index')->name('Store');

//Route::get('shop/{product}', 'ShopController@show')->name('Store.show');