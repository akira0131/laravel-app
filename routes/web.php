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

Auth::routes();

// Top Page
Route::get('/', 'TopController@index');

// Search Category Page
Route::get('search/category', 'SearchCategoryController@index');

// Search Item Page
Route::get('search/item', 'SearchItemController@index');

// Pickup Item Page
Route::get('pickup/item', 'PickupItemController@index');

// Ranking Item Page
Route::get('ranking/item', 'RankingItemController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
