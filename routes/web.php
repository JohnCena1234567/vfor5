<?php

Route::get('/', function () {
	return redirect('/home');
});
Route::get('/home', function () {});
Route::get('/threads', 'ThreadsController@index');
Route::get('/threads/create', 'ThreadsController@create');
Route::get('/threads/{id}', 'ThreadsController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
