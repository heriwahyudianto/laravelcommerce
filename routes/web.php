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
Route::post('/product/store', 'ProductController@store');
Route::get('/product/add', 'ProductController@add');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::put('/product/update/{id}', 'ProductController@update');
Route::get('/product/delete/{id}', 'ProductController@delete');
Route::get('/product', 'ProductController@index');
Route::get('/cart/add', 'CartController@add');
Route::post('/cart/store', 'CartController@store');
Route::get('/cart/delete/{id}', 'CartController@delete');
Route::get('/', 'CartController@index');
