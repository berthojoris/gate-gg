<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommunityAdmin extends Model
{
    protected $connection = 'online_gate';
    protected $table = 'ggid_communityadmin';

    public function application()
    {
        return $this->belongsTo('App\Community', 'community_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Myuser', 'user_id', 'id');
    }

    public function addedby()
    {
        return $this->belongsTo('App\Myuser', 'added_by_id', 'id');
    }
}
