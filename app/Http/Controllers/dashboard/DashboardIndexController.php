<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bid;
use App\Models\User;
use App\Models\Worker;
use App\Models\Project;
use App\Models\RefProvince;


class DashboardIndexController extends Controller
{
    public function index()
    {
        $userId = session('userId');
        if (is_null($userId)) {
            return 'login terlebih dahulu';
        }
        $user = User::where('user_id', '=', $userId)
            ->first();

        $projectUser = Project::with('bid')
            ->where('user_id', '=', $userId)
            ->orderBy('project.created_at')
            ->get();

        $worker = Worker::where('user_id', '=', $userId)
            ->first();
        $projectWorker = null;
        if ($worker != null) {
            $projectWorker = Bid::where('worker_id', '=', $worker->worker_id)
                ->with('worker')
                ->get();
        }
        return view('dashboard.index', compact('user', 'projectUser', 'projectWorker'));
    }
}
