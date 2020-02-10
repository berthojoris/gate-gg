<?php

namespace App\Http\Controllers;

use App\Myuser;
use App\Jobs\SendEmail;
use App\Exports\AppExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MyuserController extends Controller
{

    public function data()
    {
        return datatables()->of(Myuser::query())->toJson();
    }

    public function index()
    {
        return view('user.index');
    }

    public function downloadExcel()
    {
        $query = Myuser::orderBy('id', 'desc')->get();
        return fastexcel($query)->download('users.csv');
    }
}
