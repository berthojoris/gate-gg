<?php

namespace App\Http\Controllers;

use App\AdminLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class AdminLogController extends Controller
{
    public function data()
    {
        $model = DB::connection('local_gate')->table('django_admin_log')
            ->select(DB::raw('django_admin_log.*, ggid_myuser.name as username, django_content_type.model'))
            ->join('ggid_myuser', 'ggid_myuser.id', '=', 'django_admin_log.user_id')
            ->join('django_content_type', 'django_content_type.id', '=', 'django_admin_log.content_type_id');
            return DataTables::of($model)->toJson();
    }

    public function index()
    {
        return view('admin.log');
    }
}
