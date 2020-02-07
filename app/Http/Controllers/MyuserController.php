<?php

namespace App\Http\Controllers;

use App\Myuser;
use Illuminate\Http\Request;

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

    public function findByEmail()
    {

    }

    public function findByNumber()
    {

    }

    public function filterByEmail()
    {

    }
}
