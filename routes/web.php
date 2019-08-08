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


Route::get('/', 'Pagecontroller@home');

Route::get('/about', 'Pagecontroller@about');

Route::get('/products', 'ProductController@product');
Route::get('/products/new-arrivals', 'ProductController@newArrivals');

//User Authentication
Route::get('/products/register', 'ProductController@newArrivals');
Route::get('/products/login', 'ProductController@newArrivals');