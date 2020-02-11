<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/user', 'MyuserController@index')->name('user');
    Route::get('/application', 'ApplicationController@index')->name('application');
    Route::get('/community', 'CommunityController@index')->name('community');


    // ================================== Download API ==================================
    Route::get('/download/user', 'MyuserController@downloadExcel')->name('download_user');
    Route::get('/download/application', 'ApplicationController@downloadExcel')->name('download_application');
    Route::get('/download/community', 'CommunityController@downloadExcel')->name('download_community');
});

Route::get('/api', 'HomeController@index')->name('api_usage');
Route::get('/activity', 'HomeController@index')->name('activity');
Route::get('/point', 'HomeController@index')->name('point');

Route::get('/report/user', 'HomeController@index')->name('report_user');
Route::get('/report/community', 'HomeController@index')->name('report_community');
Route::get('/report/application', 'HomeController@index')->name('report_application');
Route::get('/report/point', 'HomeController@index')->name('report_point');

Route::get('/mail', 'HomeController@mail')->name('mail');


// ================================== Datatable API ==================================
Route::get('/data/application', 'ApplicationController@data')->name('application_data');
Route::get('/data/user', 'MyuserController@data')->name('user_data');
Route::get('/data/community', 'CommunityController@data')->name('community_data');
