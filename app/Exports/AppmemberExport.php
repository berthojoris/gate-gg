<?php

namespace App\Exports;

use App\ApplicationMember;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class AppmemberExport implements FromCollection, WithMapping, WithHeadings
{
    use Exportable;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function collection()
    {
        if (in_array($this->id, memberSuryanation())) {
            $query = ApplicationMember::with(['user' => function($user) {
                return $user->select('id', 'name', 'email', 'last_login', 'phone', 'dob', 'gender');
            }, 'application' => function($app) {
                return $app->select('id', 'name');
            }])->whereIn('application_id', memberSuryanation())->get();
        } else {
            $query = ApplicationMember::with(['user' => function($user) {
                return $user->select('id', 'name', 'email', 'last_login', 'phone', 'dob', 'gender');
            }, 'application' => function($app) {
                return $app->select('id', 'name');
            }])->whereApplicationId($this->id)->get();
        }
        return $query;
    }

    public function map($appmember) : array
    {
        return [
            $appmember->user->name,
            $appmember->user->email,
            $appmember->user->phone,
            $appmember->user->dob,
            $appmember->user->gender
        ] ;
    }

    public function headings() : array
    {
        return [
           'Name',
           'Email',
           'Phone',
           'Date Of Birth',
           'Gender'
        ] ;
    }
}
