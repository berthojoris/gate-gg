<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $connection = 'gate';
    protected $table = 'ggid_community';
}
