<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'ggid_point';
}
