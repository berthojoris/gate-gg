<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QRCodeUserRelation extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'ggid_qrcodeuserrelation';
}
