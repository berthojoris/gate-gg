<?php

namespace App\Exports;

use App\Myuser;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyusersExport implements FromQuery, ShouldQueue
{
    use Exportable;

    public function query()
    {
        return Myuser::query();
    }
}
