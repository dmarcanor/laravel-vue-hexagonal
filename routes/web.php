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

Route::post('/store', 'ReviewController@store');

Route::post('/list', 'ReviewController@list');

Route::post('/update', 'ReviewController@update');

Route::post('/delete', 'ReviewController@delete');
