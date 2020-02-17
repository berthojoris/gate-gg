<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;

class Application extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'ggid_application';

    public static function data()
    {
        $model = DB::connection('local_gate')->table('ggid_application')
            ->select(DB::raw('ggid_application.*, ggid_myuser.name as username, ggid_myuser.email'))
            ->join('ggid_myuser', 'ggid_myuser.id', '=', 'ggid_application.user_id');
        return DataTables::of($model)->toJson();
    }
}
