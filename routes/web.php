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

//Welcome Controller for handling the Products grid
Route::get('/', 'WelcomePageController@index')->name('landing');
Route::get('welcome', 'WelcomePageController@index')->name('Home');

//Search Feature Web Route
Route::get('/search', 'ShopController@search')->name('search');


Route::get('welcome', function () {
    $products = Product::inRandomOrder()->take(8)->get();
    return view('welcome')->with('products', $products);
});

//Basic Web Routes
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

Route::get('movieclub', function () {
    return view('movieclub');
});


//Shop Web Routes 
Route::get('shop', 'ShopController@index')->name('Store.index');

Route::get('shop/{product}', 'ShopController@show')->name('Store.show');

//Cart Routes
Route::get('/checkout', 'CartController@index')->name('checkout.index');
Route::post('/checkout', 'CartController@store')->name('checkout.show');




//  URL/empty - Destroys items in cart{Used for testing purposes only}
Route::get('empty', function() {
    Cart::destroy();
    return redirect()->route('checkout.index');
});


//Voyager Routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//User Authenication Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
