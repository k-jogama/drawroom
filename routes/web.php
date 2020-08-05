<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home.index');
Route::resource('/home', 'HomeController')->except(['index']);
