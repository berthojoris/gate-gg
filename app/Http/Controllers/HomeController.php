<?php

namespace App\Http\Controllers;

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
        return view('home');
    }

    public function mail()
    {
        // $data = 10000;
        // return (new EmailNotif($data))->render();
        Mail::to('berthojoris@gmail.com')->send(new EmailNotif($data));
        return "done";
    }
}
