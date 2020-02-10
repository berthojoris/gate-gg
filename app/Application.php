<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'ggid_application';
}
