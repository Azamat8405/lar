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

Route::get('/', 'IndexController@index');
Route::get('/texts/{url}', 'TextController@index')->name('text');

Route::get('/news/', 'NewsController@index');
Route::get('/news/{url_news}', 'NewsController@full')->name('full_news');
Route::get('/coaches/', 'CoachController@index');
Route::get('/coaches/{url}', 'CoachController@index');
Route::get('/documents/{cat_url?}', 'DocumentController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
