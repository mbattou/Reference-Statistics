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

//GET
Route::get('/',         'PagesController@getIndex');
Route::get('/ondesk',   'PagesController@getOndesk');
Route::get('/offdesk',  'PagesController@getOffdesk');
Route::get('/report',   'PagesController@getReport');
Route::get('/contact',  'PagesController@getContact');
Route::get('/about',    'PagesController@getAbout');
Route::get('/demo',     'PagesController@getDemo');
Route::get('/dash',     'PagesController@getDash');
Route::get('/store',    'PagesController@getData');
Route::get('/sample',   'PagesController@getSample');
ROUTE::get('/clear',    'PagesController@clearCookie');
//POST
Route::post('/ondesk', 'PagesController@storeOnDesk');//store: insert into DB
Route::post('/offdesk', 'PagesController@storeOffDesk');//store: insert into DB
Route::post('/setCookie', 'PagesController@setCookie');//setCookie: sets the cookie
//testing date time picker
Route::get('/test', 'PagesController@getTest');