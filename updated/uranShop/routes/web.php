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

Route::get('/home', 'ProductController@index')->name('home');
Route::get('/','ProductController@index')->name('shop');

Route::group([
    'prefix'    => '/shop',
],function(){
    Route::resource('product' ,'ProductController'); 
    Route::resource('category' ,'CategoryController'); 
    Route::resource('category', 'CategoryController', ['except' => ['index']]);
});

Route::group([
    'prefix'    => '/admin',
    'namespace' => 'Admin',
    'middleware'=> ['auth','admin'],
],function(){
   Route::get('/','AdminController@index'); 
   Route::resource('adminCategory','CategoryController'); 
});

Auth::routes();