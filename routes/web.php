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

Route::get('/', 'pageController@getHome');
Route::get('/about', 'pageController@getAbout');
Route::get('/love', 'pageController@getLove');
Route::get('/work', 'pageController@getWork');
Route::get('/contact', 'pageController@getContact');
