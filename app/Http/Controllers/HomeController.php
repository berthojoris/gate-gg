<?php

namespace App\Http\Controllers;

use App\Myuser;
use App\Community;
use App\Application;
use App\Mail\EmailNotif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalUser = Myuser::count();
        $totalApp = Application::count();
        $totalCommunity = Community::count();
        return view('home', compact('totalUser', 'totalApp', 'totalCommunity'));
    }

    public function mail()
    {
        $data = 10000;
        return (new EmailNotif($data))->render();
    }
}
