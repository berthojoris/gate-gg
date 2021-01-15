<?php

namespace App\Http\Controllers;

use App\Myuser;
use App\Community;
use App\Relationship;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Exports\CommunityExport;
use Illuminate\Support\Facades\DB;

class CommunityController extends Controller
{
    public function data()
    {
        $model = Community::with(['application' => function($query) {
            $query->select('id', 'name');
        }, 'user' => function($query) {
            $query->select('id', 'email', 'name');
        }]);
        return datatables()->eloquent($model)->toJson();
    }

    public function index()
    {
        return view('community.index');
    }

    public function downloadExcel()
    {
        return (new CommunityExport)->download('community.csv', Excel::CSV);
    }

    public function viewCommunityDetail($id)
    {
        session()->forget('currentUrl');
        session(['currentUrl' => request()->fullUrl()]);

        $data = Relationship::with(['communityMember' => function($query) {
            $query->select('id', 'email', 'name', 'last_login');
        }, 'addedBy' => function($query) {
            $query->select('id', 'email', 'name');
        }, 'communityName' => function($query) {
            $query->select('id', 'name');
        }])->where('to_user_id', $id)->get();

        return view('community.view', compact('data', 'id'));
    }

    public function viewUserViaCommunity($iduser)
    {
        $backLink = session()->get('currentUrl');
        $data = Myuser::with('city')->where('id', $iduser)->first();
        return view('community.view_user', compact('data', 'backLink'));
    }

    public function findByEmail()
    {
        $email = request('email');

        $data = Community::whereHas('relationship.communityMember', function($q) use ($email) {
            $q->where('email', $email);
        })->get();

        return $data;
    }
}
