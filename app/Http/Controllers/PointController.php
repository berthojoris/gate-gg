<?php

namespace App\Http\Controllers;

use App\Point;
use Maatwebsite\Excel\Excel;
use App\Exports\PointByIdExport;
use App\Exports\PointCategoryExport;

class PointController extends Controller
{
    public function data()
    {
        return Point::data();
    }

    public function dataPointCategory()
    {
        return Point::dataPointCategory();
    }

    public function downloadExcel()
    {
        return fastexcel(Point::downloadExcel())->download('point.csv');
    }

    public function viewPointDetail($id)
    {
        $data = Point::with(['application'])->whereUserId($id)->get();
        return view('point.view', compact('data', 'id'));
    }

    public function index()
    {
        return view('point.index');
    }

    public function category()
    {
        return view('point.category');
    }

    public function downloadPointCategoryExcel()
    {
        return (new PointCategoryExport)->download('point_category.csv', Excel::CSV, ['Content-Type' => 'text/csv']);
    }

    public function downloadExcelById($id, $name)
    {
        return (new PointByIdExport($id))->download("point-".$name.'.csv', Excel::CSV, ['Content-Type' => 'text/csv']);
    }

    public function openModalHistory($id)
    {
        $data = Point::with(['application', 'user' => function($user) {
            return $user->select('id', 'name', 'email', 'gender', 'is_active');
        }])->whereUserId($id)->get();
        return $data;
    }
}
