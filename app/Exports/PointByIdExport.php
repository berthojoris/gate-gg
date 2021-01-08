<?php

namespace App\Exports;

use App\Point;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class PointByIdExport implements FromCollection, WithMapping, WithHeadings
{
    use Exportable;

    protected $idData;

    public function __construct($idData)
    {
        $this->idData = $idData;
    }

    public function collection()
    {
        $query = Point::whereUserId($this->idData)->get();
        return $query;
    }

    public function map($point) : array
    {
        return [
            Carbon::createFromTimeStamp(strtotime($point->datetime_added))->diffForHumans(),
            number_format($point->amount),
        ] ;
    }

    public function headings() : array
    {
        return [
           'Point Didapatkan',
           'Jumlah Point',
        ];
    }
}
