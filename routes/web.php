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
<<<<<<< HEAD
    return view('admin/dashboard');
});
Route::get('admin/category', 'CategoryController@index')->name('category.index');
Route::get('admin/category/create', 'CategoryController@create')->name('category.create');
Route::post('admin/category/store', 'Catego7ryController@store')->name('category.store');
Route::get('admin/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::put('admin/category/update/{id}', 'CategoryController@update')->name('category.update');
Route::delete('admin/category/delete/{id}', 'CategoryController@destroy')->name('category.destroy');
Route::resource('admin', 'CategoryController');
<<<<<<< HEAD
Route::resource('product', 'ProductController');
=======


//Route for frontend

Route::get('home',function()
{
 return view('pages.index');
});
Route::get('product', function(){
	return view('pages.product');
});
Route::get('shopping', function(){
	return view('pages.shopping');
});
Route::get('blog', function(){
	return view('pages.blog');
});

Route::get('about', function(){
	return view('pages.about');
});
Route::get('content', function(){
	return view('pages.content');
});

Route::get('navbar', function()
{
 return view('category.dashboard.master');
});


>>>>>>> fcb40289ef5827d768d2e9f55770f4dd1ad969b5
=======
    return view('welcome');
});
>>>>>>> db4c825b1e1e9566248a691f77f04eb121a7a1b1
