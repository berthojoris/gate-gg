<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;

class Relationship extends Model
{
    protected $connection = 'online_gate';
    protected $table = 'ggid_relationship';

    public function communityMember()
    {
        return $this->belongsTo('App\Myuser', 'from_user_id', 'id');
    }

    public function addedBy()
    {
        return $this->belongsTo('App\Myuser', 'added_by_id', 'id');
    }

    public function communityName()
    {
        return $this->belongsTo('App\Myuser', 'to_user_id', 'id');
    }
}
