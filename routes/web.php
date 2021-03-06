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

Route::get('/', function (Request $request) {
    return view('auth.login');
});
Auth::routes(['register' => false]);


Route::post('/login','LoginController@log_in')->name('login');
Route::get('/article/{slug}/{id}', 'LeadsController@shared_article')->name('shared-article');

Route::group(['middleware' => ['MbsAuth']], function () {
	Route::get('/logout','LoginController@log_out')->name('logout');
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/leadsgen', 'LeadsController@index')->name('leadsgen');
	Route::get('/leadsgen/{slug}', 'LeadsController@article')->name('leadsgen-article');
	Route::get('/leadsgen/article/{slug}', 'LeadsController@article_detail')->name('leadsgen-article-detail');

	Route::get('/recruiting', 'RecruitingController@index')->name('recruiting');
	Route::get('/recruiting/{slug}', 'RecruitingController@article')->name('recruiting-article');
	Route::get('/recruiting/article/{slug}', 'RecruitingController@article_detail')->name('recruiting-article-detail');

	Route::get('/branding', 'BrandingController@index')->name('branding');
	Route::get('/branding/download', 'BrandingController@download')->name('branding-download');
	Route::get('/tips', 'TipsController@index')->name('tips');
	Route::get('/tips/article/{slug}', 'TipsController@article')->name('tips-article');

});