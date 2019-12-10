<?php

Route::get('/', 'Crud@index')->name('home');
Route::get('/create', 'Crud@create')->name('create');
Route::post('/create', 'Crud@store')->name('store');