<?php

namespace App\Http\Controllers;

use App\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class PointController extends Controller
{
    public function data()
    {
        $model = DB::connection('local_gate')->table('ggid_point')
            ->select(DB::raw('user_id, SUM(amount) as total_point, ggid_myuser.name, ggid_myuser.email'))
            ->join('ggid_myuser', 'ggid_myuser.id', '=', 'ggid_point.user_id')
            ->groupBy('user_id');
            return DataTables::of($model)->toJson();
    }

    public function dataPointCategory()
    {
        $model = DB::connection('local_gate')->table('ggid_pointcategory')
            ->select(DB::raw('ggid_pointcategory.*, ggid_application.name as app_name, ggid_pointcategorytimerule.name as rule_name'))
            ->join('ggid_application', 'ggid_application.id', '=', 'ggid_pointcategory.application_id')
            ->join('ggid_pointcategorytimerule', 'ggid_pointcategorytimerule.id', '=', 'ggid_pointcategory.rule_id');
            return DataTables::of($model)->toJson();
    }

    public function index()
    {
        return view('point.index');
    }

    public function category()
    {
        return view('point.category');
    }

    public function downloadExcel()
    {
        $query = DB::connection('local_gate')->table('ggid_point')
            ->select(DB::raw('user_id, SUM(amount) as total_point, ggid_myuser.name, ggid_myuser.email'))
            ->join('ggid_myuser', 'ggid_myuser.id', '=', 'ggid_point.user_id')
            ->groupBy('user_id')
            ->get();
        return fastexcel($query)->download('point.csv');
    }

    public function viewPointDetail($id)
    {
        $data = Point::with(['application'])->whereUserId($id)->get();
        return view('point.view', compact('data'));
    }
}
