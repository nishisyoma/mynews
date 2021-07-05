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

// 釣り投稿
Auth::routes();

Route::group(['prefix' => 'admin', "middleware"=>"auth"], function() {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('news', 'Admin\NewsController@index');
    Route::get('news/edit', 'Admin\NewsController@edit');
    Route::post('news/edit', 'Admin\NewsController@update');
    Route::get('news/delete', 'Admin\NewsController@delete');
    
});
Route::get('/', 'NewsController@index');
Route::get('/profile', 'ProfileController@index');

Route::get('/home', 'HomeController@index');

// game投稿
Route::get('/newhome', 'MainController@create');

Route::group(['prefix' => 'admin'], function() {
    Route::get('game/create', 'Admin\GameController@add');
    Route::post('game/create', 'Admin\GameController@create');
});