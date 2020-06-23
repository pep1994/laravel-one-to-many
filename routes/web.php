<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'TaskController@index') -> name('home');

Route::get('/show/{id}' , 'TaskController@show') -> name('show');

Route::get('/edit/{id}' , 'TaskController@edit') -> name('edit');

Route::post('/update/{id}' , 'TaskController@update') -> name('update');

Route::get('/delete/{id}' , 'TaskController@delete') -> name('delete');

Route::get('/create' , 'TaskController@create') -> name('create');

Route::post('/store' , 'TaskController@store') -> name('store');

Route::get('/employee' , 'EmployeeController@index') -> name('employee');

Route::get('/employee/edit/{id}' , 'EmployeeController@edit') -> name('edit_employee');

Route::post('/employee/update/{id}' , 'EmployeeController@update') -> name('update_employee');

Route::get('/employee/update/{id}' , 'EmployeeController@delete') -> name('delete_employee');

