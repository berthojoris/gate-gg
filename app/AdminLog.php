<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;

class AdminLog extends Model
{
    protected $connection = 'online_gate';
    protected $table = 'django_admin_log';

    public static function data()
    {
        $model = DB::connection('local_gate')->table('django_admin_log')
            ->select(DB::raw('django_admin_log.*, ggid_myuser.name as username, django_content_type.model'))
            ->join('ggid_myuser', 'ggid_myuser.id', '=', 'django_admin_log.user_id')
            ->join('django_content_type', 'django_content_type.id', '=', 'django_admin_log.content_type_id');
        return DataTables::of($model)->toJson();
    }
}
