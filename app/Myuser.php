<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myuser extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'ggid_myuser';
}
