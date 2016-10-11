<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'IndexController@index');

Route::get('shop', 'ShopController@index');

Route::get('about', 'IndexController@about');

Route::get('services', 'IndexController@services');

Route::get('clients', 'IndexController@clients');

Route::get('team', 'IndexController@team');

Route::get('blogs', 'IndexController@blogs');

Route::get('shop/{id}/{slug}', 'ShopController@product');

  Route::post('add-to-cart', 'ShopController@addToCart');

  Route::get('cart', 'ShopController@getCart');

  Route::post('update-cart', 'ShopController@updateCart');

  Route::post('login', 'AuthController@doLogin');

  Route::get('checkout', 'ShopController@checkout');

  Route::get('check', function()
  {
    $update = \Lutforrahman\Nujhatcart\Facades\Cart::update('abf641c78f67274481735ce10ed37501', '3');
    return \Lutforrahman\Nujhatcart\Facades\Cart::contents();
  });