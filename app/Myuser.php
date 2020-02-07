<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myuser extends Model
{
    protected $connection = 'gate';
    protected $table = 'ggid_myuser';
}
