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
Route::get('/welcome',['as' => 'welcome.index', 'uses' => 'welcomeController@index']);

Route::get('/search',['as' => 'search.index', 'uses' => 'SearchController@index']);

Route::get('/searchend',['as' => 'searchend.index', 'uses' => 'SearchendController@index']);
Route::post('/searchend',['as' => 'searchend.store', 'uses' => 'SearchendController@store']);
Route::delete('/back/{id}',['as' => 'searchend.back', 'uses' => 'SearchendController@back']);

Route::get('/ticket',['as' => 'ticket.index', 'uses' => 'TicketController@index']);
Route::post('/ticket',['as' => 'ticket.store', 'uses' => 'TicketController@store']);
Route::delete('/ticket/{id}',['as' => 'ticket.destroy', 'uses' => 'TicketController@destroy']);



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

