<?php

namespace App\Http\Controllers;

use App\QRCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class QRCodeController extends Controller
{
    public function data()
    {
        $model = DB::connection('local_gate')->table('ggid_qrcode')
            ->select(DB::raw('ggid_qrcode.*, ggid_pointcategory.name as point_cat_name, ggid_application.name as app_name, ggid_myuser.name as username'))
            ->join('ggid_myuser', 'ggid_myuser.id', '=', 'ggid_qrcode.creator_id')
            ->join('ggid_pointcategory', 'ggid_pointcategory.id', '=', 'ggid_qrcode.point_category_id')
            ->join('ggid_application', 'ggid_application.id', '=', 'ggid_qrcode.application_id');
            return DataTables::of($model)->toJson();
    }

    public function dataPointCategory()
    {
        $model = DB::connection('local_gate')->table('ggid_qrcodeuserrelation')
            ->select(DB::raw('ggid_qrcodeuserrelation.*, ggid_qrcode.event_name, ggid_myuser.name as username'))
            ->join('ggid_myuser', 'ggid_myuser.id', '=', 'ggid_qrcodeuserrelation.user_id')
            ->join('ggid_qrcode', 'ggid_qrcode.id', '=', 'ggid_qrcodeuserrelation.qr_code_id');
            return DataTables::of($model)->toJson();
    }

    public function index()
    {
        return view('qrcode.index');
    }

    public function usage()
    {
        return view('qrcode.usage');
    }

    public function downloadExcel()
    {
        $query = QRCode::select('name', 'website', 'status')->orderBy('id', 'desc')->get();
        return fastexcel($query)->download('application.csv');
    }
}
