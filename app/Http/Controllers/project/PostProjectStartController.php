<?php

namespace App\Http\Controllers\project;

use App\Models\Project;
use App\Models\RefService;
use App\Models\RefProvince;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProjectServiceDemand;

class PostProjectStartController extends Controller
{
    public function index()
    {   //untuk narik data dari tabel
        $service=RefService::get();
        $province=RefProvince::get();

        return view('project.PostProjectStart',compact('service','province'));
    }

    public function store(Request $request)
    {
        //untuk insert ke tabel
        $project = new Project;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->material_from = $request->materialFrom;
        $project->budget_range_min = $request->minBudget;
        $project->budget_range_max = $request->maxBudget;
        $project->project_start_dt = $request->startDt;
        $project->time_estimation = $request->timeEstimation;
        $project->total_worker = $request->totalWorker;
        $project->address = $request->address;
        $project->ref_province_id = $request->refProvinceId;

        $project->save();
        

        foreach($request->refServiceId as $rsi)
        {
            $projectServiceDemand = new ProjectServiceDemand;
            $projectServiceDemand->ref_service_id = $rsi;
            $projectServiceDemand->project_id = $project->project_id;
            $projectServiceDemand->save();
        }


        return back()->with('success','posting sukses!');
    }
}
