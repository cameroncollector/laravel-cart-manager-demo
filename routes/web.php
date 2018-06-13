<?php

Route::get('/', 'MenuController@index')->name('home');

Route::post('add-to-cart', 'CartController@addToCart');

Route::post('remove-from-cart', 'CartController@removeFromCart');

Route::post('increment-cart-item', 'CartController@incrementCartItem');

Route::post('decrement-cart-item', 'CartController@decrementCartItem');

Route::post('apply-discount', 'CartController@applyDiscount');
