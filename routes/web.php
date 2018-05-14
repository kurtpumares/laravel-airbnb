<?php


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::resource('rooms', 'RoomController');
    Route::get('profile', 'ProfileController@profile')->name('profile');
});

Route::get('/', 'HomeController@index')->name('home');
