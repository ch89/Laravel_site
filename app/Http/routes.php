<?php

Route::get('/', function() {
	return view('pages.home');
});

Route::resource('news', 'NewsController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('user', function() {
	$user = new App\User();
	$user->name = 'pelle';
	$user->email = 'pelle@hej.se';
	$user->password = bcrypt('sommar');
	$user->save();
});