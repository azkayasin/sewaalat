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

Route::get('/', function () {
    return view('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produk', 'HomeController@produk')->name('produk');
Route::get('/cart', 'HomeController@cart')->name('cart');

Route::get('/add-to-cart/{id}','HomeController@addToCart')->name('bebas');
Route::patch('/update-cart','HomeController@update');

Route::get('/filter/{filter}', 'HomeController@filter' ) ->name('filter');

Route::post('/home','HomeController@store')->name('home.post');