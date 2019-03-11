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

Route::get('/', 'PagesController@index');

Route::resource('posts', 'PostsController');
Route::resource('schools', 'SchoolsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/search', 'SchoolsController@search');

Route::post('/search', 'SchoolsController@handle');
