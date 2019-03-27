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

Route::get('/', 'WelcomePageController@index')->name('landing');
Route::get('welcome', 'WelcomePageController@index')->name('Home');



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

Route::get('cart', function () {
    return view('cart');
});

Route::get('checkout', function () {
    return view('checkout');
});



Route::get('shop', 'ShopController@index')->name('Store.index');

Route::get('shop/{product}', 'ShopController@show')->name('Store.show');