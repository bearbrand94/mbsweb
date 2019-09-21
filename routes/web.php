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

Route::post('/login','LoginController@log_in')->name('login');
Route::get('/article/{slug}/{token}')->name('shared-article');

Route::group(['middleware' => ['MbsAuth']], function () {
	Route::get('/logout','LoginController@log_out')->name('logout');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/leadsgen', 'LeadsController@index')->name('leadsgen');
	Route::get('/leadsgen/{slug}', 'LeadsController@article')->name('article');
	Route::get('/leadsgen/article/{slug}', 'LeadsController@article_detail')->name('article-detail');
	Route::get('/branding', 'BrandingController@index')->name('branding');
	Route::get('/tips', 'TipsController@index')->name('tips');
	Route::get('/tips/article/{slug}', 'TipsController@article')->name('tips-article');
});