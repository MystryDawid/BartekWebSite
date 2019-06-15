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

Route::get('/', "PagesController@index");
Route::get('/BartekAdminUrban/StartAddCategory', "BartekAdminUrbanController@StartAddCategory");
Route::get('/BartekAdminUrban/StartAddProduct', "BartekAdminUrbanController@StartAddProduct");
Route::get('/BartekAdminUrban/StartEditProduct', "BartekAdminUrbanController@StartEditProduct");
Route::get('/BartekAdminUrban/StartDelProduct', "BartekAdminUrbanController@StartDelProduct");
Route::get('/product/{id}', "PagesController@product");
Route::get('/category/{id}', "PagesController@category");
Route::resource('BartekAdminUrban','BartekAdminUrbanController');
