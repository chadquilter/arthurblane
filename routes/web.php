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
Route::get('/asphalt', 'PagesController@services');
Route::get('/concrete', 'PagesController@services');
Route::get('/demolition', 'PagesController@services');
Route::get('/excavation', 'PagesController@services');
Route::get('/finishout', 'PagesController@services');
Route::get('/groundupconstruction', 'PagesController@services');
Route::get('/interior', 'PagesController@services');
Route::get('/kitchenbath', 'PagesController@services');
Route::get('/stell', 'PagesController@services');

Route::resource('jobs', 'JobsController');
Route::resource('address', 'AddressController');
Route::resource('items', 'ItemsController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
