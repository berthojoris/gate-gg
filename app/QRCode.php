<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;

class QRCode extends Model
{
    protected $connection = 'online_gate';
    protected $table = 'ggid_qrcode';

    public static function data()
    {
        $model = DB::connection('online_gate')->table('ggid_qrcode')
            ->select(DB::raw('ggid_qrcode.*, ggid_pointcategory.name as point_cat_name, ggid_application.name as app_name, ggid_myuser.name as username'))
            ->join('ggid_myuser', 'ggid_myuser.id', '=', 'ggid_qrcode.creator_id')
            ->join('ggid_pointcategory', 'ggid_pointcategory.id', '=', 'ggid_qrcode.point_category_id')
            ->join('ggid_application', 'ggid_application.id', '=', 'ggid_qrcode.application_id');
            return DataTables::of($model)->toJson();
    }

    public static function dataPointCategory()
    {
        $model = DB::connection('online_gate')->table('ggid_qrcodeuserrelation')
            ->select(DB::raw('ggid_qrcodeuserrelation.*, ggid_qrcode.event_name, ggid_myuser.name as username, ggid_qrcode.point'))
            ->join('ggid_myuser', 'ggid_myuser.id', '=', 'ggid_qrcodeuserrelation.user_id')
            ->join('ggid_qrcode', 'ggid_qrcode.id', '=', 'ggid_qrcodeuserrelation.qr_code_id');
            return DataTables::of($model)->toJson();
    }

    public static function downloadQrcode()
    {
        return DB::connection('online_gate')->table('ggid_qrcode')
            ->select(DB::raw('ggid_qrcode.event_name, ggid_qrcode.message_title, ggid_qrcode.point, ggid_application.name as app_name, ggid_myuser.name as username, ggid_qrcode.start_date, ggid_qrcode.end_date'))
            ->join('ggid_myuser', 'ggid_myuser.id', '=', 'ggid_qrcode.creator_id')
            ->join('ggid_application', 'ggid_application.id', '=', 'ggid_qrcode.application_id')
            ->get();
    }

    public static function downloadQrcodeUsage()
    {
        return DB::connection('online_gate')->table('ggid_qrcodeuserrelation')
            ->select(DB::raw('ggid_qrcode.event_name, ggid_myuser.name as username, ggid_qrcodeuserrelation.datetime_created as redeem_time, ggid_qrcode.point'))
            ->join('ggid_myuser', 'ggid_myuser.id', '=', 'ggid_qrcodeuserrelation.user_id')
            ->join('ggid_qrcode', 'ggid_qrcode.id', '=', 'ggid_qrcodeuserrelation.qr_code_id')
            ->get();
    }
}
