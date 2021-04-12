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


//Route::get('XXX', 'AAAController＠bbb');//

Auth::routes();

Route::group(['prefix' => 'admin', "middleware"=>"auth"], function() {
    // laravel-12課題
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    
    // laravel-13で追記
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    // laravel-15で追記
    Route::get('news', 'Admin\NewsController@index');
    // laravel-16で追記
    Route::get('news/edit', 'Admin\NewsController@edit');
    Route::post('news/edit', 'Admin\NewsController@update');
    // laravel-17で追記
    Route::get('news/delete', 'Admin\NewsController@delete');
    // laravel-13の課題　3と6で追加
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    
});
Route::get('/', 'NewsController@index');
//　laravel-19課題追記
Route::get('/profile', 'ProfileController@index');

Route::get('/home', 'HomeController@index');

// 作成物
Route::get('/newhome', 'MainController@create');

Route::group(['prefix' => 'admin'], function() {
    Route::get('game/create', 'Admin\GameController@add');
    Route::post('game/create', 'Admin\GameController@create');
});