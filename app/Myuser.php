<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;

class Myuser extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'ggid_myuser';

    public static function userJoin()
    {
        $model = DB::connection('local_gate')
            ->table('ggid_myuser')
            ->select(DB::raw("COUNT(*) AS total_join, MONTH(date_joined) AS join_month, YEAR(date_joined) AS join_year"))
            ->groupBy(DB::raw('YEAR(date_joined), MONTH(date_joined)'))
            ->orderBy('join_year', 'DESC')
            ->get();
        return $model;
    }
}
