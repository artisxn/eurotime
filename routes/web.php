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
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'OpenController@index')->name('index');
Route::view('/o-nama','front.about')->name('about');
Route::view('/outlet','front.outlet')->name('outlet');
Route::view('/kontakt','front.contact')->name('contact');
Route::get('/proizvodi','OpenController@products')->name('products');
Route::view('/proizvod','OpenController@product')->name('product');
Route::view('/kategorije','front.categories')->name('categories');
Route::view('/blog','front.blog')->name('blog');
Route::view('/post','front.post')->name('post');
Route::view('/error','front.error')->name('error');
Route::view('/servis','front.service')->name('service');
