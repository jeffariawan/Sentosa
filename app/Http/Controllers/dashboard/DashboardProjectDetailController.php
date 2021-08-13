<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Bid;
use App\Models\User;
use App\Models\Worker;
use App\Models\Project;
use App\Models\RefService;
use App\Models\RefProvince;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProjectServiceDemand;

class DashboardProjectDetailController extends Controller
{
    public function index($projectid)
    {   //untuk narik data dari tabel
        $project = Project::where('project_id', '=', $projectid)
            ->first();
        $user = User::where('user_id', '=', session('userId'))
            ->first();
        $province = RefProvince::where('ref_province_id', '=', $project->ref_province_id)
            ->first();
        $bid = Bid::with('worker.user')->where('project_id', '=', $projectid)
            ->where('win_status', '=', 1)
            ->first();
        return view('dashboard.ProjectDetail', compact('project', 'user', 'province', 'bid'));
    }
}
