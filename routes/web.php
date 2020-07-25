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
Route::get('/Contacts', 'HomeController@contact')->name('contact');
Route::post('/Contacts/submit', 'HomeController@submit')->name('submit');
Route::get('/Thank-you', 'HomeController@thanks')->name('thank');

Route::get('/Books/add-a-book', 'BookController@create')->name('book.create');
Route::post('/Books/store', 'BookController@store')->name('book.store');
Route::get('/Books/books-list', 'BookController@index')->name('book.index');
Route::get('/Books/detail/{book}', 'BookController@show')->name('book.show');
Route::get('/Books/edit/{book}' , 'BookController@edit')->name('book.edit');
Route::put('/Book/update/{book}', 'BookController@update')->name('book.update');
Route::delete('/Book/delete/{book}', 'BookController@destroy')->name('book.destroy');

