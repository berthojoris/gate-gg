<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'HomeController@index')->name('user');
Route::get('/application', 'HomeController@index')->name('application');
Route::get('/community', 'HomeController@index')->name('community');

Route::get('/api', 'HomeController@index')->name('api_usage');
Route::get('/activity', 'HomeController@index')->name('activity');
Route::get('/point', 'HomeController@index')->name('point');

Route::get('/report/user', 'HomeController@index')->name('report_user');
Route::get('/report/community', 'HomeController@index')->name('report_community');
Route::get('/report/application', 'HomeController@index')->name('report_application');
Route::get('/report/point', 'HomeController@index')->name('report_point');

Route::get('/mail', 'HomeController@mail')->name('mail');
