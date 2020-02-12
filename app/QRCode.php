<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    protected $connection = 'local_gate';
    protected $table = 'ggid_qrcode';
}
