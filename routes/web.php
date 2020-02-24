<?php

Route::get('/', function () {
    if(auth()->user()) {
        return redirect('/login');
    } else {
        return redirect('/home');
    }
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    // ================================== Main Pages ==================================
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/user', 'MyuserController@index')->name('user');
    Route::get('/application', 'ApplicationController@index')->name('application');
    Route::get('/application/{id}/{any}', 'ApplicationController@viewApplicationDetail')->name('application_detail');
    Route::get('/community', 'CommunityController@index')->name('community');
    Route::get('/community/{id}/{any}', 'CommunityController@viewCommunityDetail')->name('community_detail');
    Route::get('/point', 'PointController@index')->name('point');
    Route::get('/point/category', 'PointController@category')->name('point_category');
    Route::get('/point/{id}/{any}/history', 'PointController@viewPointDetail')->name('point_user_detail');
    Route::get('/qrcode', 'QRCodeController@index')->name('qrcode');
    Route::get('/qrcode/usage', 'QRCodeController@usage')->name('qrcode_usage');
    Route::get('/notification', 'NotificationController@index')->name('notification');
    Route::get('/log', 'AdminLogController@index')->name('adminlog');
    Route::get('/user/{id}/edit', 'MyuserController@edit')->name('edituser');


    // ================================== Download Excel ==================================
    Route::get('/download/user', 'MyuserController@downloadExcel')->name('download_user');
    Route::get('/download/user/man', 'MyuserController@downloadExcelMan')->name('download_user_man');
    Route::get('/download/user/woman', 'MyuserController@downloadExcelWoman')->name('download_user_woman');
    Route::get('/download/user/week', 'MyuserController@downloadWeek')->name('download_user_week');
    Route::get('/download/user/month', 'MyuserController@downloadMonth')->name('download_user_month');
    Route::get('/download/application', 'ApplicationController@downloadExcel')->name('download_application');
    Route::get('/download/community', 'CommunityController@downloadExcel')->name('download_community');
    Route::get('/download/point', 'PointController@downloadExcel')->name('download_point');
    Route::get('/download/qrcode', 'QRCodeController@downloadQrcode')->name('download_qrcode');
    Route::get('/download/qrcode/usage', 'QRCodeController@downloadQrcodeUsage')->name('download_qrcode_usage');


    // ================================== Datatable API ==================================
    Route::get('/data/application', 'ApplicationController@data')->name('application_data');
    Route::get('/data/user', 'MyuserController@dataCustomQuery')->name('user_data');
    Route::get('/data/community', 'CommunityController@data')->name('community_data');
    Route::get('/data/point', 'PointController@data')->name('point_data');
    Route::get('/data/pointcategory', 'PointController@dataPointCategory')->name('point_data');
    Route::get('/data/qrcode', 'QRCodeController@data')->name('qrcode_data');
    Route::get('/data/qrcode/usage', 'QRCodeController@dataPointCategory')->name('qrcodeusage_data');
    Route::get('/data/notification', 'NotificationController@data')->name('notification_data');
    Route::get('/data/adminlog', 'AdminLogController@data')->name('adminlog_data');
    Route::get('/data/user-join', 'MyuserController@join')->name('user_join');
    Route::get('/data/point/modal/{id}', 'PointController@openModalHistory')->name('open_modal');
    Route::get('/data/city', 'MyuserController@getCity')->name('get_city');
    Route::post('/update/user', 'MyuserController@updateUser')->name('update_user');
});
