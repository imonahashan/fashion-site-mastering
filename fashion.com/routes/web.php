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

Route::get('/', [
    'uses' => 'FashionController@index',
    'as' => '/'
]);

Route::get('/about-us', [
    'uses' => 'FashionController@aboutUs',
    'as' => '/about-us'
]);

Route::get('/contact', [
    'uses' => 'FashionController@contact',
    'as' => '/contact'
]);

Route::get('/gallery', [
   'uses' => 'FashionController@gallery',
   'as' =>'/gallery'
]);

Route::get('/icons', [
    'uses' => 'FashionController@icons',
    'as' =>'/icons'
]);

Route::get('/typography', [
    'uses' => 'FashionController@typo',
    'as' =>'/typo'
]);
