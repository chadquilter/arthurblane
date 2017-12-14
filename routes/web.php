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

Route::get('/', 'PagesController@index');
Route::resource('quotes', 'QuotesController');
Route::get('/services', 'PagesController@services');
Route::resource('jobs', 'JobsController');
Route::resource('address', 'AddressController');
Route::resource('items', 'ItemsController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
