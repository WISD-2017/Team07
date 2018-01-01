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

Route::get('/search',['as' => 'search.index', 'uses' => 'SearchController@index']);

Route::get('/searchend',['as' => 'searchend.index', 'uses' => 'SearchendController@index']);
Route::post('/searchend',['as' => 'searchend.store', 'uses' => 'SearchendController@store']);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
