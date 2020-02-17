<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationMember extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'ggid_applicationmember';

    public function user()
    {
        return $this->belongsTo('App\Myuser', 'user_id', 'id');
    }
}
