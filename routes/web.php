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
Route::get('/', 'LocationController@home');
Route::get('/showapi', 'LocationController@index');
Route::get('/show', 'LocationController@index1');
Route::get('/Add', 'LocationController@create');

Route::post('/show', 'LocationController@store');


Route::get('/all/showapi', 'InfController@index');
Route::get('/all/show', 'InfController@index1');
Route::get('/all/Add', 'InfController@create');

Route::post('/all/show', 'InfController@store');


//////////////news
Route::get('/news/show', 'NewController@index1');
Route::get('/news/Add', 'NewController@create');

Route::post('/news/show', 'NewController@store');
