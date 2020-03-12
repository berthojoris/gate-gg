<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'ggid_region';
}
