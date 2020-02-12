<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointCategoryTimeRule extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'ggid_pointcategorytimerule';
}
