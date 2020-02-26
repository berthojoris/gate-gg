<?php

namespace App\Http\Controllers;

use App\Application;
use App\ApplicationMember;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Exports\AppmemberExport;
use Illuminate\Support\Facades\DB;

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
        if (in_array($id, memberSuryanation())) {
            $data = ApplicationMember::with(['user' => function($user) {
                return $user->select('id', 'name', 'email', 'last_login');
            }, 'application' => function($app) {
                return $app->select('id', 'name');
            }])->whereIn('application_id', memberSuryanation())->get();

        } else {
            $data = ApplicationMember::with(['user' => function($user) {
                return $user->select('id', 'name', 'email', 'last_login');
            }, 'application' => function($app) {
                return $app->select('id', 'name');
            }])->whereApplicationId($id)->get();
        }

        $unique = $data->unique('user.email');
        $unique->values()->all();

        return view('application.view', compact('unique', 'id'));
    }

    public function downloadExcel()
    {
        $query = Application::select('name', 'website', 'status')->orderBy('id', 'desc')->get();
        return fastexcel($query)->download('application.csv');
    }

    public function downloadUserByApp($appid)
    {
        $count = ApplicationMember::whereApplicationId($appid)->get()->count();
        if($count > 5000) {
            return (new AppmemberExport($appid))->download('application_member.html', Excel::HTML);
        } else {
            return (new AppmemberExport($appid))->download('application_member.csv', Excel::CSV, ['Content-Type' => 'text/csv']);
        }
    }
}
