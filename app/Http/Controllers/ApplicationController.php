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
}
