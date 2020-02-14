<?php

namespace App\Http\Controllers;

use App\Community;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Exports\CommunityExport;

class CommunityController extends Controller
{
    public function data()
    {
        $model = Community::with('application', 'user');
        return datatables()->eloquent($model)->toJson();
    }

    public function index()
    {
        return view('community.index');
    }

    public function downloadExcel()
    {
        return (new CommunityExport)->download('community.csv', Excel::CSV, ['Content-Type' => 'text/csv']);
    }

    public function viewCommunityDetail($id)
    {
        $data = Community::with([
            'user' => function($qUser) {
            $qUser->select('id', 'name as community_name');
        }, 'communitylist.user' => function($query) {
            $query->select('id', 'email', 'name', 'last_login');
        }, 'communitylist.addedby' => function($q) {
            $q->select('id', 'name as addedby');
        }])->whereId($id)->first();

        // dd($data->communitylist);

        return view('community.view', compact('data'));
    }
}
