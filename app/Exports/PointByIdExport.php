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
        $query = Point::with('awarded', 'user')->whereUserId($this->idData)->get();
        return $query;
    }

    public function map($point) : array
    {
        return [
            $point->datetime_added,
            number_format($point->amount),
            ($point->reason == null) ? '-' : $point->reason,
            ($point->awarded == null) ? '-' : $point->awarded->name,
            ($point->user == null) ? '-' : $point->user->name,
        ];
    }

    public function headings() : array
    {
        return [
           'Point Didapatkan Tanggal',
           'Jumlah Point',
           'Alasan Diberikan',
           'Point Diberikan Oleh',
           'User',
        ];
    }
}
