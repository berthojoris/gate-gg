<?php

namespace App\Http\Controllers;

use App\AdminLog;

class AdminLogController extends Controller
{
    public function data()
    {
        return AdminLog::data();
    }

    public function index()
    {
        return view('admin.log');
    }
}
