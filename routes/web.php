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
//首頁路由
Route::get('/', function () {
    return view('welcome');
});
//返回首頁
Route::get('/welcome',['as' => 'welcome.index', 'uses' => 'welcomeController@index']);

//選擇訂票日期、起站、終站頁面
Route::get('/search',['as' => 'search.index', 'uses' => 'SearchController@index']);

//選擇的日期、起站、終站存入資料庫
Route::get('/searchend',['as' => 'searchend.index', 'uses' => 'SearchendController@index']);

//查詢資料庫內容找出相對應的車次及票價路由
Route::post('/searchend',['as' => 'searchend.store', 'uses' => 'SearchendController@store']);

//選擇訂票數量、車次、出發時間路由
Route::get('/ticket',['as' => 'ticket.index', 'uses' => 'TicketController@index']);

//選擇訂票數量、車次、時間路由存入資料庫
Route::post('/ticket',['as' => 'ticket.store', 'uses' => 'TicketController@store']);

//刪除訂單資料
Route::delete('/ticket/{id}',['as' => 'ticket.destroy', 'uses' => 'TicketController@destroy']);


//登入註冊
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

