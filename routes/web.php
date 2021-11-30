<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/home/create', 'ProdTypesController@create')->middleware('isAdmin','auth');
Route::POST('/prodtypes', 'ProdTypesController@store');
Route::get('/prodtypes/update', 'ProdTypesController@edit')->middleware('isAdmin','auth');
Route::get('/prodtypes/{prodtypeId}', 'ProductsController@detail');
Route::patch('/update/{prodtype}', 'ProdTypesController@update');
Route::delete('/update/{prodtype}', 'ProdTypesController@destroy');

Route::get('/', 'ProdTypesController@index');
Route::get('/products', 'ProductsController@search');

Route::get('/addToCart/{id}', 'ProductsController@cart')->name('AddToCart')->middleware('auth');
Route::get('/cart', 'ProductsController@cartIndex')->middleware('auth');
Route::get('/cart/delete', 'ProductsController@cartDelete')->middleware('auth');


Route::get('/checkout', 'ProductsController@checkout');


Auth::routes();
Route::get('/home', 'ProductsController@index')->name('home');

Route::get('/history', 'TransactionsController@show');

Route::get('/home/add', 'ProductsController@create')->middleware('isAdmin','auth');
Route::get('/products/{product}', 'ProductsController@show')->middleware('auth');
Route::POST('/products', 'ProductsController@store');
Route::get('/{product}/update', 'ProductsController@edit')->middleware('isAdmin','auth');
Route::patch('/products/{product}', 'ProductsController@update');
Route::delete('/products/{product}', 'ProductsController@destroy');


// Route::get('/threads', 'ThreadController@index');
// Route::get('/update/{id}', 'ThreadController@edit')->middleware('isAdmin');
