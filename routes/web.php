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

/*Route::get('/products',"ProductsController@index");
Route::get('/products/create', "ProductsController@create");
Route::get('/products/{id}',"ProductsController@show");
Route::post('/products', "ProductsController@store");
Route::get('/products/{id}/edit',"ProductsController@edit");
Route::put('/products/{id}', 'ProductsController@update');
Route::delete('/products/{$id}','ProductsController@destroy');*/
Route::resource('products', 'ProductsController');

Route::resource('pages','PagesController');

Route::resource('orders','OrdersController');
