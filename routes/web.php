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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/gibberish-playground', 'GibberishController@playground')->name('gibberish.playground')->middleware('auth');
Route::resource('gibberish', 'GibberishController',['except'=>['create','edit']])->middleware('web'); // this should have an API middleware, but for this project I don't need to implement any API

