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

Route::get('/', 'PublicController@index')->name('public.index');
Route::get('/signin', 'PublicController@signin')->name('public.signin');
Route::get('/signup', 'PublicController@signup')->name('public.signup');

Route::get('/home', 'HomeController@index')->name('home.index');
