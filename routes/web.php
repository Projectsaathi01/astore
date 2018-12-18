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
Route::get('admin/category', 'CategoryController@index')->name('category.index');
Route::get('admin/category/create', 'CategoryController@create')->name('category.create');
Route::post('admin/category/store', 'Catego7ryController@store')->name('category.store');
Route::get('admin/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::put('admin/category/update/{id}', 'CategoryController@update')->name('category.update');
Route::delete('admin/category/delete/{id}', 'CategoryController@destroy')->name('category.destroy');
Route::resource('admin', 'CategoryController');
Route::resource('product', 'ProductController');
