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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

 //09 Routingについて理解する
 //課題４−１　//12 ユーザー認証を実装する 課題２
Route::group(['prefix' => 'admin'], function() {
     Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    //13 ニュース投稿画面を作成しよう 課題３
     Route::post('profile/create', 'Admin\ProfileController@create')->middleware('auth');
});
//課題４−２ //12 ユーザー認証を実装する 課題３
Route::group(['prefix' => 'admin'], function() {
     Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
     //13 ニュース投稿画面を作成しよう 課題６
     Route::post('profile/edit', 'Admin\ProfileController@update')->middleware('auth');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create', 'Admin\NewsController@add');
     Route::post('news/create', 'Admin\NewsController@create'); # 追記
});

