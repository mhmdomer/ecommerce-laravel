<?php

use Gloudemans\Shoppingcart\Facades\Cart;

// Shop and welcome
Route::get('/', 'WelcomePageController@index')->name('welcome');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

// Cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/save-later/{product}', 'CartController@saveLater')->name('cart.save-later');
Route::post('/cart/add-to-cart/{product}', 'CartController@addToCart')->name('cart.add-to-cart');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');


// checkout
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');


// coupon
Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon/', 'CouponsController@destroy')->name('coupon.destroy');

Route::get('empty', function () {
    Cart::destroy();
    Cart::instance('saveForLater')->destroy();
    return redirect()->route('cart.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
