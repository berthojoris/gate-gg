<?php

namespace App\Http\Controllers;

use App\City;
use App\Myuser;
use App\Jobs\SendEmail;
use App\Exports\AppExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MyuserController extends Controller
{

    public function index()
    {
        return view('user.index');
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
        $query = Myuser::orderBy('id', 'desc')->get();
        return fastexcel($query)->download('users.csv');
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
        $update = Myuser::find(request('id'))->update([
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
