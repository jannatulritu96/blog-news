<?php

/*
*
*/

Auth::routes();
Route::get('/','FrontController@index')->name('home');
Route::get('details/{post_id}','FrontController@details')->name('details');
Route::get('category_post/{category_id}','FrontController@category_post')->name('category.posts');
Route::get('search','FrontController@search')->name('search');

// Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function (){

	Route::get('dashboard', function () {
    return view('admin/dashboard');
	})->name('admin.dashboard');

	Route::resource('category','CategoryController');

	Route::resource('post','PostController');
	Route::resource('author','AuthorController');

});


