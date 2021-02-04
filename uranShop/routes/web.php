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

Route::get('/','ShopController@index')->name('shop');

Route::group([
    'prefix'    => '/shop',
],function(){
    // Route::get('/admin','Admin\AdminController@index')->middleware('auth'); - было
    Route::resource('product' ,'ProductController'); 
    Route::resource('category' ,'CategoryController'); 
});

// Route::resource('/shop/product' ,'ProductController'); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
