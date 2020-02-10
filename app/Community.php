<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'ggid_community';
}
