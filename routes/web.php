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

//User

Route::GET('PagesController/search',
['uses' => 'PagesController@search']);
Route::GET('PagesController/category',
['uses' => 'PagesController@category']);
Route::get('/product/{id}', "PagesController@product");
Route::get('/category/{id}', "PagesController@category");
Route::get('/', "PagesController@index");

//Admin

Auth::routes();
Route::get('/BartekAdminUrban','HomeController@index')->name('home');
Route::get('/BartekAdminUrban/StartAddCategory', 'BartekAdminUrbanController@StartAddCategory')->middleware('auth');;
Route::get('/BartekAdminUrban/StartEditCategory', 'BartekAdminUrbanController@StartEditCategory')->middleware('auth');;
Route::get('/BartekAdminUrban/StartDelCategory', 'BartekAdminUrbanController@StartDelCategory')->middleware('auth');;
Route::get('/BartekAdminUrban/StartAddProduct', "BartekAdminUrbanController@StartAddProduct")->middleware('auth');;
Route::get('/BartekAdminUrban/DisplayProductForAdmin', "BartekAdminUrbanController@DisplayProductForAdmin")->middleware('auth');;
Route::get('/BartekAdminUrban/StartDelProduct', "BartekAdminUrbanController@StartDelProduct")->middleware('auth');;
Route::get('/BartekAdminUrban', "BartekAdminUrbanController@DisplayProductForAdmin")->middleware('auth');;

Route::post('BartekAdminUrban/AddProduct',
 ['uses' => 'BartekAdminUrbanController@AddProduct'])->middleware('auth');

Route::GET('BartekAdminUrban/StartEditProduct/{id}',
 ['uses' => 'BartekAdminUrbanController@StartEditProduct'])->middleware('auth');

Route::GET('BartekAdminUrban/DeleteProduct/{id}',
 ['uses' => 'BartekAdminUrbanController@DeleteProduct'])->middleware('auth');

Route::post('BartekAdminUrban/AddCategory',
 ['uses' => 'BartekAdminUrbanController@AddCategory'])->middleware('auth');

Route::post('BartekAdminUrban/UpdateCategory',
 ['uses' => 'BartekAdminUrbanController@UpdateCategory'])->middleware('auth');

Route::GET('BartekAdminUrban/DeleteCategory/{id}',
 ['uses' => 'BartekAdminUrbanController@DeleteCategory'])->middleware('auth');

 Route::get('/BartekAdminUrban/StartEditCategory/{id}', 
 "BartekAdminUrbanController@EditCategory")->middleware('auth');;

 Route::GET('BartekAdminUrban/searchA',
 ['uses' => 'BartekAdminUrbanController@searchA'])->middleware('auth');;



