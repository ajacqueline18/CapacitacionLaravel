<?php
 
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
