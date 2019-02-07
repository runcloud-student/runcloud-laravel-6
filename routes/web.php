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

Route::get('/scheduling', 'SchedulingController@index');

Route::get('/queue', 'QueueController@index');
Route::post('/queue/store', 'QueueController@store')->name('addqueue');

Route::get('/cache', 'CacheController@index');
Route::get('/cache/get', 'CacheController@get')->name('getcache');
Route::post('/cache/store', 'CacheController@store')->name('addcache');
