<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class NotificationController extends Controller
{
    public function data()
    {
        $model = DB::connection('local_gate')->table('notifications_notification')
            ->select(DB::raw('notifications_notification.*, ggid_myuser.name as username'))
            ->join('ggid_myuser', 'ggid_myuser.id', '=', 'notifications_notification.recipient_id');
            return DataTables::of($model)->toJson();
    }

    public function index()
    {
        return view('notification.index');
    }
}
