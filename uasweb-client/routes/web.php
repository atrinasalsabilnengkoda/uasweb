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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/johnmayer', 'regController@johnmayer');
Route::get('/lauv', 'regController@lauv');
Route::get('/kodaline', 'regController@kodaline');
Route::get('/ticketing', 'regController@ticketing');
Route::get('/usertickets', 'regController@usertickets');
Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/purchase', 'regController@purchase');
Route::post('/cancel', 'regController@cancel');
Route::get('logout', 'Auth\LoginController@logout');
