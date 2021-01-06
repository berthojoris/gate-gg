<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointCategory extends Model
{
    protected $connection = 'online_gate';
    protected $table = 'ggid_pointcategory';

    public function application()
    {
        return $this->belongsTo('App\Application', 'application_id', 'id');
    }

    public function rule()
    {
        return $this->belongsTo('App\PointCategoryTimeRule', 'rule_id', 'id');
    }


}
