<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;

class Point extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'ggid_point';

    public function application()
    {
        return $this->belongsTo('App\Application', 'application_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Myuser', 'user_id', 'id');
    }

    public static function data()
    {
        $model = DB::connection('local_gate')->table('ggid_point')
            ->select(DB::raw('user_id, SUM(amount) as total_point, ggid_myuser.name, ggid_myuser.email'))
            ->join('ggid_myuser', 'ggid_myuser.id', '=', 'ggid_point.user_id')
            ->groupBy('user_id');
        return DataTables::of($model)->toJson();
    }

    public static function dataPointCategory()
    {
        $model = DB::connection('local_gate')->table('ggid_pointcategory')
            ->select(DB::raw('ggid_pointcategory.*, ggid_application.name as app_name, ggid_pointcategorytimerule.name as rule_name'))
            ->join('ggid_application', 'ggid_application.id', '=', 'ggid_pointcategory.application_id')
            ->join('ggid_pointcategorytimerule', 'ggid_pointcategorytimerule.id', '=', 'ggid_pointcategory.rule_id');
        return DataTables::of($model)->toJson();
    }

    public static function downloadExcel()
    {
        return DB::connection('local_gate')->table('ggid_point')
            ->select(DB::raw('user_id, SUM(amount) as total_point, ggid_myuser.name, ggid_myuser.email'))
            ->join('ggid_myuser', 'ggid_myuser.id', '=', 'ggid_point.user_id')
            ->groupBy('user_id')
            ->get();
    }
}
