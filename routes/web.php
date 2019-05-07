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



Route::resource('appareil', 'AppareilController');

Route::get('/', function () {return view('index');});
Route::get('/about-us', function () {return view('about-us');});
Route::get('/service', function () {return view('service');});
Route::get('/contact', function () {return view('contact');});
Route::get('/gallery', function () {return view('gallery');});
Route::get('/commencer', function () {return view('commencer');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
