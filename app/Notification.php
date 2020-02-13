<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'notifications_notification';

    public function recipient()
    {
        return $this->belongsTo('App\Myuser', 'recipient_id', 'id');
    }
}
