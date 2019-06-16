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
Route::get('/BartekAdminUrban/StartEditCategory', 'BartekAdminUrbanController@StartEditCategory')->middleware('auth');;
Route::get('/BartekAdminUrban/StartDelCategory', 'BartekAdminUrbanController@StartDelCategory')->middleware('auth');;
Route::get('/BartekAdminUrban/StartAddProduct', "BartekAdminUrbanController@StartAddProduct")->middleware('auth');;
Route::get('/BartekAdminUrban/StartEditProduct', "BartekAdminUrbanController@StartEditProduct")->middleware('auth');;
Route::get('/BartekAdminUrban/StartDelProduct', "BartekAdminUrbanController@StartDelProduct")->middleware('auth');;
Route::get('/product/{id}', "PagesController@product");
Route::get('/category/{id}', "PagesController@category");
Route::get('/BartekAdminUrban','HomeController@index')->name('home');

Route::post('BartekAdminUrban/AddProduct',
 ['uses' => 'BartekAdminUrbanController@AddProduct'])->middleware('auth');


Route::post('BartekAdminUrban/AddCategory',
 ['uses' => 'BartekAdminUrbanController@AddCategory'])->middleware('auth');

 Route::post('BartekAdminUrban/UpdateCategory',
 ['uses' => 'BartekAdminUrbanController@UpdateCategory'])->middleware('auth');

 Route::GET('BartekAdminUrban/DeleteCategory/{id}',
 ['uses' => 'BartekAdminUrbanController@DeleteCategory'])->middleware('auth');

 Route::GET('BartekAdminUrban/DeleteProduct/{id}',
 ['uses' => 'BartekAdminUrbanController@DeleteProduct'])->middleware('auth');



 



 Route::get('/BartekAdminUrban/StartEditCategory/{id}', 
 "BartekAdminUrbanController@EditCategory")->middleware('auth');;


 Route::GET('BartekAdminUrban/searchA',
 ['uses' => 'BartekAdminUrbanController@searchA'])->middleware('auth');;

 Route::GET('PagesController/search',
 ['uses' => 'PagesController@search']);

 Route::GET('PagesController/category',
 ['uses' => 'PagesController@category']);






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
