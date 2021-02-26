<?php

namespace App\Exports;

use App\Myuser;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class MyusersExport implements FromQuery
{
    use Exportable;

    public function query()
    {
        return Myuser::query();
    }
}
