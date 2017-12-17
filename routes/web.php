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
Route::get('/asphalt', 'PagesController@asphalt');
Route::get('/cm', 'PagesController@cm');
Route::get('/concrete', 'PagesController@concrete');
Route::get('/demolition', 'PagesController@demolition');
Route::get('/excavation', 'PagesController@excavation');
Route::get('/finishout', 'PagesController@finishout');
Route::get('/groundupconstruction', 'PagesController@groundupconstruction');
Route::get('/interior', 'PagesController@interior');
Route::get('/kitchenbath', 'PagesController@kitchenbath');
Route::get('/steel', 'PagesController@steel');

Route::resource('jobs', 'JobsController');
Route::resource('address', 'AddressController');
Route::resource('items', 'ItemsController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
