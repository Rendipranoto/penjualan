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


Route::get('/create', function () {  
	echo "Route diakses menggunakan nama"; 
		})->name('create'); 

Route::get('/produk', 'produkController@index'); 

Route::get('/produk/show', 'produkController@show'); 

Route::get('/halaman','tampilanController@index');

