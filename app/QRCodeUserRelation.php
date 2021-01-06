<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QRCodeUserRelation extends Model
{
    protected $connection = 'online_gate';
    protected $table = 'ggid_qrcodeuserrelation';
}
