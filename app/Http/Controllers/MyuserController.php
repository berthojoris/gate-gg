<?php

namespace App\Http\Controllers;

use App\City;
use App\Myuser;
use Carbon\Carbon;
use App\Application;
use App\Jobs\SendEmail;
use App\Exports\AppExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class MyuserController extends Controller
{

    public function updateUserGate()
    {
        dd(request()->all());
    }

    public function addUser()
    {
        $selectItem = Application::where('name', '!=', '')->pluck('name', 'id');
        return view('user.add_user_dashboard', compact('selectItem'));
    }

    public function index()
    {
        return view('user.index');
    }

    public function dataCustomQuery()
    {
        $users = Myuser::select(['id','name','gender','address','phone','email','last_login'])
        ->where('name', '!=', '');
        return DataTables::of($users)->make();
    }

    public function dataCustomCollection()
    {
        $users = Myuser::select(['id','name','gender','address','phone','email','last_login'])->get();
        $filter = $users->filter(function($value, $key) {
            if ($value['name'] != '') {
                return true;
            }
        });
        $filter->all();
        return DataTables::of($filter)->make();
    }

    public function data()
    {
        return datatables()->of(Myuser::query())->toJson();
    }

    public function join()
    {
        return Myuser::userJoin();
    }

    public function downloadExcel()
    {
        $query = Myuser::alluser()->get();
        return fastexcel($query)->download('users_all.csv');
    }

    public function downloadExcelMan()
    {
        $query = Myuser::onlyman()->get();
        return fastexcel($query)->download('users_man.csv');
    }

    public function downloadExcelWoman()
    {
        $query = Myuser::onlywoman()->get();
        return fastexcel($query)->download('users_woman.csv');
    }

    public function downloadWeek()
    {
        $start = Carbon::now()->startOfWeek()->format('Y-m-d H:i:s');
        $end = Carbon::now()->endOfWeek()->format('Y-m-d H:i:s');
        $query = Myuser::loginbeetween($start, $end)->get();
        return fastexcel($query)->download('users_this_week.csv');
    }

    public function downloadMonth()
    {
        $start = Carbon::now()->firstOfMonth()->format('Y-m-d H:i:s');
        $end = Carbon::now()->endOfMonth()->format('Y-m-d H:i:s');
        $query = Myuser::loginbeetween($start, $end)->get();
        return fastexcel($query)->download('users_this_month.csv');
    }

    public function getCity()
    {
        $data = City::orderBy('name', 'asc')->get();
        return [
            'count' => count($data),
            'data' => $data
        ];
    }

    public function edit(Myuser $id)
    {
        return $id;
    }

    public function updateUser()
    {
        $update = Myuser::find(request('id'))
        ->update([
            'name' => toStrip(request('name')),
            'about' => toStrip(request('about')),
            'address' => toStrip(request('address')),
            'website' => toStrip(request('website')),
            'phone' => toStrip(request('phone')),
            'dob' => request('dob'),
            'is_active' => request('is_active'),
            'gender' => request('gender')
        ]);

        if($update) {
            return [
                'error' => null,
                'message' => "Your data has been updated",
                'code' => 200
            ];
        }
    }
}
