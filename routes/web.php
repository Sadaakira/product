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


Route::get('/welcome', function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ログインしないと見られないページ
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'BooksController@index');
    Route::get('/create', 'BooksController@create');
    Route::post('/', 'BooksController@store');
    Route::get('/books/{book}/words', 'BooksController@book');
    Route::get('/books/{book}/words/add', 'BooksController@add');
    Route::delete('/books/{book}/words', 'BooksController@destroy');
    
});

//Route::get('/', 'BooksController@index')->middleware('auth');

