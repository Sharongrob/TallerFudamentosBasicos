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
Route::resource('movie', 'MovieController');
Route::get('movie/edit/{id}', 'MovieController@edit')->name("movie.edit");
Route::get('movie/destroy/{id}', 'MovieController@destroy')->name("movie.destroy");
Route::post('movie/show', ['as' => 'movie/show', 'uses' => 'MovieController@show']);
Route::post('movie/update/{id}','MovieController@update')->name("movie.update");
Route::get('movie/create', 'MovieController@create')->name("movie.create");
Route::post('movie/store', 'MovieController@store')->name("movie.store");
Route::get('movies', 'MovieController@index')->name("movie.index");