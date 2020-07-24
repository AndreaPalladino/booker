<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/Books/add-a-book', 'BookController@create')->name('book.create');
Route::post('/Books/store', 'BookController@store')->name('book.store');
Route::get('/Books/books-list', 'BookController@index')->name('book.index');
Route::get('/Books/detail/{book}', 'BookController@show')->name('book.show');
