<?php


/**
 * Store routes.
 */

//Route::get('tax', ['product-category', 'uses' => 'StoreController@category']);
//Route::get('template', ['cart', 'uses' => 'CartController@index']);
//Route::get('template', ['store', 'uses' => 'StoreController@index']);




Route::get('/', 'PagesController@index');
Route::get('singular', ['product', 'uses' => 'StoreController@product']);
Route::get('singular', ['page', 'uses' => 'PagesController@page']);
Route::get('404', 'PagesController@error404');
