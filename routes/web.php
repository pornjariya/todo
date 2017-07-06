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

Route::get('cal-{num1}-{num2}', 'HomeController@cal');

Route::get('/', 'HomeController@index');
Route::get('users', 'UserController@index');
Route::get('users/show/{id}','UserController@show');
Route::auth();
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@home');

