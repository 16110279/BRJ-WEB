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

Route::get('/', 'PenawaranController@index');
Route::get('/admin', 'Admin\AdminController@index');
Route::get('/admin/{penawaran}', 'Admin\AdminController@show');
Route::delete('/admin/{penawaran}', 'Admin\AdminController@destroy');
Route::get('/admin/{penawaran}/edit', 'Admin\AdminController@edit');
Route::patch('/admin/{penawaran}', 'Admin\AdminController@update');

Route::post('/create', 'PenawaranController@create');
Route::post('/create', 'PenawaranController@store');
// Route::post('/create', 'MainController@create');

Auth::routes();
