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
    Route::get('/', 'BookController@index');
    Route::get('/create', 'BookController@create');
    Route::post('/', 'BookController@store');
    
    Route::get('/books/{book}/words', 'BookController@show');
    Route::get('/books/{book}/words/edit', 'BookController@edit');
    Route::put('/books/{book}/words', 'BookController@update');
    // Route::delete('/books/{book}/words', 'BookController@bookdestroy');
   
    Route::get('/books/{book}/words/create', 'WordController@create');
    Route::post('/books/{book}/words', 'WordController@store');
    
    Route::get('/books/{book}/words/{word}', 'WordController@show');
    Route::get('/books/{book}/words/{word}/edit', 'WordController@edit');
    Route::put('/books/{book}/words/{word}', 'WordController@update');
    // Route::delete('/books/{book}/words/{word}', 'WordController@destroy');
});

//Route::get('/', 'BooksController@index')->middleware('auth');

