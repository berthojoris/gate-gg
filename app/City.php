<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $connection = 'online_gate';
    protected $table = 'ggid_city';
}
