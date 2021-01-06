<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointCategoryTimeRule extends Model
{
    protected $connection = 'online_gate';
    protected $table = 'ggid_pointcategorytimerule';
}
