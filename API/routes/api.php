<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/prestashop/products', 'PrestashopController@index');


Route::middleware('auth:api')->group(function () {
    Route::get('/products', 'ProductController@index');
    Route::post('/products', 'ProductController@store');
    Route::get('/products/{id}', 'ProductController@show');
    Route::put('/products/{id}', 'ProductController@update');
    Route::delete('/products/{id}', 'ProductController@destroy');

    Route::get('/orders', 'OrderController@index');
    Route::post('/orders', 'OrderController@store');
    Route::get('/orders/{id}', 'OrderController@show');
    Route::put('/orders/{id}', 'OrderController@update');
    Route::delete('/orders/{id}', 'OrderController@destroy');
});
