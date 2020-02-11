<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
