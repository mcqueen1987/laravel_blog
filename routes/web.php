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

Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/fruits', 'FruitsController@welcome')->name('welcome');
Route::get('/update/{id}', 'BlogController@update')->name('update');
Route::post('/updatePost', 'BlogController@updatePost')->name('updatePost');
Route::get('/delete/{id}', 'BlogController@delete')->name('delete');
Route::get('/add', 'BlogController@add')->name('add');
Route::post('/saveData', 'BlogController@saveData')->name('saveData');
Route::post('/create', 'BlogController@create')->name('create');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/react', 'ReactController@index')->name('react');
