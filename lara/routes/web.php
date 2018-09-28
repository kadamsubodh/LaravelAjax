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

Route::resource('category','CategoryController');
Route::POST('ajax', 'CategoryController@ajax')->name('ajax');
Route::POST('deleteSelectedCategories','CategoryController@deleteAll');
Route::resource('product', 'ProductController');
Route::POST('deleteSelectedProducts','ProductController@deleteAllProduct');
Route::get('ajaxMessage', 'CategoryController@ajaxMessage')->name('ajaxMessage');
Route::get('category', 'CategoryController@index')->name('cancel');