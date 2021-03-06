<?php

namespace App\Http\Controllers;

use App\Job;
use App\Point;
use App\Myuser;
use App\QRCode;
use App\Article;
use App\Community;
use App\FailedJob;
use App\Application;
use App\Mail\EmailNotif;
use App\QRCodeUserRelation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index()
    {
        $totalCommunity = DB::connection('online_gate')->table('ggid_community')->count();
        $totalPoint = Myuser::has('point')->count();
        $userRegistered = Myuser::count();
        return view('home.index', compact('totalCommunity', 'totalPoint', 'userRegistered'));
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

    public function job()
    {
        $data = Job::where("attempts", 1)->first();

        if(!empty($data)) {
            return "Masih Ada Running Job";
        } else {
            return "Tidak Ada Running Job";
        }
    }

    public function failed()
    {
        $data =  FailedJob::orderBy("id", "desc")->get();
    }
}
