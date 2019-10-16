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

    Route::get('/', 'Cabinet\MainController@testIndex')->name('index');

    Route::get('elements', 'Cabinet\MainController@testElements')->name('elements');
    Route::get('about', 'Cabinet\MainController@testAbout')->name('about');
    Route::get('contact', 'Cabinet\MainController@testContact')->name('contact');
    Route::get('post', 'Cabinet\MainController@testPost')->name('post');
    Route::get('search', 'Cabinet\MainController@testSearch')->name('search');

    Route::get('authform', 'Auth\AuthBlogController@authform')->name('authform');
    Route::get('registerform', 'Auth\AuthBlogController@registerform')->name('registerform');
    Route::get('login', 'Auth\AuthBlogController@login')->name('login');
