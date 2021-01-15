<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $connection = 'online_gate';
    protected $table = 'ggid_community';

    public function application()
    {
        return $this->belongsTo('App\Application', 'application_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Myuser', 'user_id', 'id');
    }

    public function communitylist()
    {
        return $this->hasMany('App\CommunityAdmin');
    }

    public function relationship()
    {
        return $this->hasMany('App\Relationship', 'to_user_id', 'user_id');
    }
}
