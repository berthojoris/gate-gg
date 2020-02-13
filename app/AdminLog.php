<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminLog extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'django_admin_log';
}
