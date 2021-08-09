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

Route::get('/', 'SiteController@index')->name('homepage');
Route::get('/register', 'SiteController@register')->name('register');
Route::post('/register', 'SiteController@postRegister')->name('register');
Route::get('/login', 'SiteController@postLogin')->name('login');
Route::post('/login', 'SiteController@login')->name('login');
Route::get('/about','SiteController@about')->name('about');
Route::get('/contact','SiteController@contact')->name('contact');
Route::get('/plan','SiteController@plan')->name('plan');
Route::get('/services','SiteController@services')->name('services');
Route::get('/faq','SiteController@faq')->name('faq');
Route::get('/terms','SiteController@terms')->name('terms-and-conditions');

