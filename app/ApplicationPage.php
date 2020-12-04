<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationPage extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'ggid_applicationpage';

    public function user()
    {
        return $this->belongsTo('App\Myuser', 'author_id', 'id');
    }

    public function application()
    {
        return $this->belongsTo('App\Application', 'application_id', 'id');
    }
}
