<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;

class Myuser extends Model
{
    protected $connection = 'online_gate';
    protected $table = 'ggid_myuser';
    protected $guarded = ['id'];
    public $timestamps = false;

    CONST adminUser = [1];

    public static function userJoin()
    {
        $model = DB::connection('online_gate')
            ->table('ggid_myuser')
            ->select(DB::raw("COUNT(*) AS total_join, MONTH(date_joined) AS join_month, YEAR(date_joined) AS join_year"))
            ->groupBy(DB::raw('YEAR(date_joined), MONTH(date_joined)'))
            ->orderBy('join_year', 'DESC')
            ->get();
        return $model;
    }

    public function scopeAlluser($query)
    {
        return $query->select('last_login', 'email', 'name', 'dob', 'gender', 'date_joined', 'datetime_updated')
        ->orderBy('last_login', 'desc');
    }

    public function scopeOnlyman($query)
    {
        return $query->select('last_login', 'email', 'name', 'dob', 'gender', 'date_joined', 'datetime_updated')
        ->where('gender', 'M')
        ->orderBy('last_login', 'desc');
    }

    public function scopeOnlywoman($query)
    {
        return $query->select('last_login', 'email', 'name', 'dob', 'gender', 'date_joined', 'datetime_updated')
        ->where('gender', 'F')
        ->orderBy('last_login', 'desc');
    }

    public function scopeLoginbeetween($query, $start, $end)
    {
        return $query->select('last_login', 'email', 'name', 'dob', 'gender', 'date_joined', 'datetime_updated')
        ->whereBetween('last_login', [$start, $end])
        ->orderBy('last_login', 'desc');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function point()
    {
        return $this->hasMany('App\Point', 'user_id', 'id');
    }
}
