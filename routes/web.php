<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('inicio');

Auth::routes();
Route::get('/perfil', 'UserController@perfil')->name('perfil');
Route::get('/configuracion', 'UserController@config')->name('config');
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');        

Route::get('/location', 'LocationController@index')->name('location.index');

Route::get('/help', 'HelpController@index')->name('help.index');

Route::get('/card/{id}', 'CardController@index')->name('card.index');
Route::get('/create/card', 'CardController@create')->name('card.create');
Route::post('/card/save', 'CardController@save')->name('card.save');
Route::get('/card/image/{filename}', 'CardController@getImage')->name('card.image');        