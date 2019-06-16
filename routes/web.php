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
Route::get('/BartekAdminUrban/StartAddCategory', 'BartekAdminUrbanController@StartAddCategory')->middleware('auth');;
Route::get('/BartekAdminUrban/StartAddProduct', "BartekAdminUrbanController@StartAddProduct")->middleware('auth');;
Route::get('/BartekAdminUrban/StartEditProduct', "BartekAdminUrbanController@StartEditProduct")->middleware('auth');;
Route::get('/BartekAdminUrban/StartDelProduct', "BartekAdminUrbanController@StartDelProduct")->middleware('auth');;
Route::get('/product/{id}', "PagesController@product");
Route::get('/category/{id}', "PagesController@category");
Route::get('/BartekAdminUrban','HomeController@index')->name('home');

Route::post('BartekAdminUrbanController/AddProduct',
 ['uses' => 'BartekAdminUrbanController@AddProduct']);

 Route::GET('PagesController/search',
 ['uses' => 'PagesController@search']);






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
