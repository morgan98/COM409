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

use App\Product;

Route::get('/', 'WelcomePageController@index')->name('Home Page');

Route::get('welcome', function () {
    $products = Product::inRandomOrder()->take(8)->get();
    return view('welcome')->with('products', $products);
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
