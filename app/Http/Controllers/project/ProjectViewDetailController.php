<?php

namespace App\Http\Controllers\project;

use App\Models\Bid;
use App\Models\User;
use App\Models\Project;
use App\Models\RefProvince;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectViewDetailController extends Controller
{
    public function index($projectid)
    {   //untuk narik data dari tabel
        $project=Project::where('project_id', '=', $projectid)
        ->first();
        $user=User::where('user_id', '=', $project->user_id)
        ->first();
        $province=RefProvince::where('ref_province_id', '=', $project->ref_province_id)
        ->first();

        return view('project.ProjectViewDetail',compact('project','user','province'));
    }

    public function BidStore($workerid, $projectid, Request $request)
    {
        //untuk insert ke tabel
        $Bid = new Bid;
        $Bid->offer_price = $request->offerprice;
        $Bid->description = $request->desc;
        $Bid->time_estimation = $request->time;
        $Bid->total_worker = $request->totalworker;
        $Bid->available_start_dt = $request->start;
        // $Bid->worker_id = $request->;
        $Bid->save();

        return 1;
    
    }
}

