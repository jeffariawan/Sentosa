<?php

namespace App\Http\Controllers\worker;

use App\Models\Bid;
use App\Models\User;
use App\Models\SalesH;
use App\Models\Worker;
use App\Models\Project;
use App\Models\RefService;
use App\Models\RefProvince;
use Illuminate\Http\Request;
use App\Models\WorkerService;
use App\Http\Controllers\Controller;

class WorkerViewDetailController extends Controller
{
    public function index($workerid)
    {   //untuk narik data dari tabel

        $user = User::where('user_id', '=', $project->user_id)
            ->first();
        $province = RefProvince::where('ref_province_id', '=', $project->ref_province_id)
            ->first();
        $bid = Bid::with('worker.user')->where('project_id', '=', $projectid)
            ->get();
        return view('project.ProjectViewDetail', compact('project', 'user', 'province', 'bid'));
    }
}
