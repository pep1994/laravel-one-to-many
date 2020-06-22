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

Route::get('/', 'TaskController@index') -> name('home');

Route::get('/show/{id}' , 'TaskController@show') -> name('show');

Route::get('/edit/{id}' , 'TaskController@edit') -> name('edit');

Route::post('/update/{id}' , 'TaskController@update') -> name('update');

Route::get('/delete/{id}' , 'TaskController@delete') -> name('delete');

Route::get('/create' , 'TaskController@create') -> name('create');

Route::post('/store' , 'TaskController@store') -> name('store');
