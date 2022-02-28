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

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'HomeController@index');
Route::get('/register', 'AuthController@register');
Route::get('/welcome', 'AuthController@welcome');
Route::post('/welcome', 'AuthController@welcome_post');
Route::get('/master', 'HomeController@master');
Route::get('/table', 'HomeController@table');
Route::get('/data_tables', 'HomeController@data_tables');

// CRUD - LARAVEL
Route::get('/cast/create', 'CastController@create');
Route::post('/cast', 'CastController@store');
Route::get('/cast', 'CastController@index');
Route::get('/cast/{cast_id}', 'CastController@show');
Route::get('/cast/{cast_id}/edit', 'CastController@edit');
Route::put('/cast/{cast_id}', 'CastController@update');
Route::delete('/cast/{cast_id}', 'CastController@destroy');