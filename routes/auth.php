<?php

use \Illuminate\Support\Facades\Route;

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

    Route::get('auth', 'Auth\AuthBlogController@authform')->name('auth');
    Route::get('registerform', 'Auth\AuthBlogController@registerform')->name('registerform');
    Route::post('registerPost', 'Auth\AuthBlogController@registerPost')->name('registerPost');
    Route::get('login', 'Auth\AuthBlogController@login')->name('auth.layouts.login');
    Route::post('login', 'Auth\AuthBlogController@loginPost')->name('loginPost');
    Route::get('authabout', 'Auth\AuthBlogController@about')->name('authabout');
    Route::get('authcontact', 'Auth\AuthBlogController@contact')->name('authcontact');
