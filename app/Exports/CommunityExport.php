<?php

namespace App\Exports;

use App\Community;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CommunityExport implements FromCollection, WithMapping, WithHeadings
{
    use Exportable;

    public function collection()
    {
        $query = Community::with('application', 'user')->get();
        return $query;
    }

    public function map($community) : array
    {
        return [
            $community->application->name,
            $community->user->name
        ] ;
    }

    public function headings() : array
    {
        return [
           'Community Name',
           'User Full Name'
        ] ;
    }
}
