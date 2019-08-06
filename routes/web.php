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
    #return view('welcome');
	#return view('home');
	return view('home', compact('test') );
});

Route::get('/about', function () {
	return view('about');
});

Route::get('/project', function () {
	return view('project');
});

Route::get('/contact', function () {
	return view('contact');
});
#	***
Route::get('/store', function () {
	return view('store');
});

Route::get('/item', function () {
	return view('item');
});

Route::get('/food', function () {
	return view('food');
});

Route::get('/furnitures', function () {
	return view('furnitures');
});

Route::get('/healt', function () {
	return view('healt');
});

Route::get('/school', function () {
	return view('school');
});

Route::get('/sport', function () {
	return view('sport');
});

Route::get('stores', 'StoresController@index');
