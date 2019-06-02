<?php
Route::get('/', 'MainController@index');
Route::get('/graph', 'GraphController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
