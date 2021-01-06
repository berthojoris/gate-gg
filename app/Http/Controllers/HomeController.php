<?php

namespace App\Http\Controllers;

use App\Point;
use App\Myuser;
use App\QRCode;
use App\Article;
use App\Community;
use App\Application;
use App\Mail\EmailNotif;
use App\QRCodeUserRelation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index()
    {
        $totalUser = Myuser::count();
        $totalApp = Application::count();
        $totalCommunity = Community::count();
        $totalPoint = Point::select('user_id')
            ->groupBy('user_id')
            ->get()
            ->count();
        $totalQrCode = QRCode::count();
        $totalQrCodeUsage = QRCodeUserRelation::count();

        return view('home.empty');
    }

    public function mail()
    {
        $data = 10000;
        return (new EmailNotif($data))->render();
    }

    public function test()
    {
        $data = Article::cursor()->take(10);
        return view('home.test', compact('data'));
    }
}
