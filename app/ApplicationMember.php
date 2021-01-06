<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationMember extends Model
{
    protected $connection = 'online_gate';
    protected $table = 'ggid_applicationmember';

    public function user()
    {
        return $this->belongsTo('App\Myuser', 'user_id', 'id');
    }

    public function application()
    {
        return $this->belongsTo('App\Application', 'application_id', 'id');
    }
}
