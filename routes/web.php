<?php

Route::get('/', function () {
    return redirect('/login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/stats/{municipality}/{month}', 'HomeController@stats');

Route::resource('/meetings', 'MeetingController');
