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
    return view('admin/dashboard');
});
Route::resource('admin', 'CategoryController');
Route::resource('product', 'ProductController');
Route::get('/trash', 'TrashController@index');
Route::resource('trash', 'TrashController');
