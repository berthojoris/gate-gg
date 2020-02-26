<?php

namespace App\Exports;

use App\PointCategory;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class PointCategoryExport implements FromCollection, WithMapping, WithHeadings
{
    use Exportable;

    public function collection()
    {
        $query = PointCategory::with('application', 'rule')->get();
        return $query;
    }

    public function map($pointcategory) : array
    {
        return [
            $pointcategory->status,
            $pointcategory->amount,
            $pointcategory->name,
            optional($pointcategory->application)->name,
            $pointcategory->action_performed,
            optional($pointcategory->rule)->name,
            $pointcategory->datetime_added,
        ] ;
    }

    public function headings() : array
    {
        return [
           'Status',
           'Amount',
           'Name',
           'Application',
           'Action',
           'Rule',
           'Date Added'
        ] ;
    }
}
