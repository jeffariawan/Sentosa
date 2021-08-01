<?php

namespace App\Http\Controllers\project;

use App\Models\Project;
use App\Models\RefService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProjectServiceDemand;

class PostProjectStartController extends Controller
{
    public function index()
    {   
        $service=RefService::get();
        return view('project.PostProjectStart',compact('service'));
    }

    public function store(Request $request)
    {
        $project = new Project;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->save();
        
        $projectServiceDemandAll = [];
        foreach($request->refServiceId as $rsi)
        {
            $projectServiceDemand = new ProjectServiceDemand;
            $projectServiceDemand->ref_service_id = $rsi;
            $projectServiceDemand->project_id = $project->project_id;
            $projectServiceDemand->save();

           // array_push($projectServiceDemandAll, $projectServiceDemand);
        }

        //$project->ProjectProgress()->create($projectServiceDemandAll);


        return back()->with('success','posting sukses!');
    }
}
