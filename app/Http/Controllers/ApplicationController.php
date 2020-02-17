<?php

namespace App\Http\Controllers;

use App\Application;
use App\ApplicationMember;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function data()
    {
        return Application::data();
    }

    public function index()
    {
        return view('application.index');
    }

    public function viewApplicationDetail($id)
    {
        $data = ApplicationMember::with(['user' => function($user) {
            return $user->select('id', 'name', 'email', 'last_login');
        }])->whereApplicationId($id)->get();

        return view('application.view', compact('data'));
    }

    public function downloadExcel()
    {
        $query = Application::select('name', 'website', 'status')->orderBy('id', 'desc')->get();
        return fastexcel($query)->download('application.csv');
    }
}
