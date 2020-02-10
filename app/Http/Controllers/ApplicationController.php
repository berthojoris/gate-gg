<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function data()
    {
        return datatables()->of(Application::query())->toJson();
    }

    public function index()
    {
        return view('application.index');
    }

    public function downloadExcel()
    {
        $query = Application::select('name', 'website', 'status')->orderBy('id', 'desc')->get();
        return fastexcel($query)->download('application.csv');
    }
}
