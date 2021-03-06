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

Route::group(['middleware' => 'auth'], function ()
{
    Route::get('/', 'BerandaController@index');
    Route::resource('ukm', 'UkmController');
    Route::resource('admin', 'AdminController');
    Route::get('/logout', 'LoginController@logout');

});


Route::group(['middleware' => 'guest'], function ()
{
    Route::get('/login', 'LoginController@showLoginForm');
    Route::post('/login', 'LoginController@login');


});






