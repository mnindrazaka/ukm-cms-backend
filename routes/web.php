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


Route::get('/', 'BerandaController@index')->middleware('auth');

Route::resource('ukm', 'UkmController')->middleware('auth');
Route::resource('admin', 'AdminController')->middleware('auth');

Route::get('/login', 'LoginController@showLoginForm')->middleware('guest');
Route::post('/login', 'LoginController@login')->middleware('guest');
Route::get('/logout', 'LoginController@logout')->middleware('auth');
