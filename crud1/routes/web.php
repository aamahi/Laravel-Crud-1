<?php

Route::get('/', 'Crud@index')->name('home');
Route::get('/create', 'Crud@create')->name('create');
Route::post('/create', 'Crud@store')->name('store');
Route::get('/edit/{id}','Crud@edit')->name('edit');
Route::post('/edit/{id}','Crud@update')->name('update');