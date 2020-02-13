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
        return QRCode::data();
    }

    public function dataPointCategory()
    {
        return QRCode::dataPointCategory();
    }

    public function downloadQrcode()
    {

        return fastexcel(QRCode::downloadQrcode())->download('qrcode.csv');
    }

    public function downloadQrcodeUsage()
    {
        return fastexcel(QRCode::downloadQrcodeUsage())->download('qrcodeusage.csv');
    }

    public function index()
    {
        return view('qrcode.index');
    }

    public function usage()
    {
        return view('qrcode.usage');
    }

}
