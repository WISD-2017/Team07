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

Route::get('/ticket',['as' => 'ticket.index', 'uses' => 'TicketController@index']);
Route::post('/ticket',['as' => 'ticket.store', 'uses' => 'TicketController@store']);
Route::delete('/ticket/{id}',['as' => 'ticket.destroy', 'uses' => 'TicketController@destroy']);
Route::delete('/back/{id}',['as' => 'ticket.back', 'uses' => 'TicketController@back']);


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/login', 'LoginController@getLogin');
Route::post('auth/login', 'LoginController@postLogin');
Route::get('auth/logout', 'LoginController@getLogout');


Route::get('/auth/register', 'RegisterController@getRegister');
Route::post('auth/register', 'RegisterController@postRegister');
Route::get('auth/register', 'RegisterController@storeRegister');
