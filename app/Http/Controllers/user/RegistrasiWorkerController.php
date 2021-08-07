<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RefService;
use App\Models\RefProvince;
use App\Models\Worker;
use App\Models\WorkerService;
use App\Models\WorkerServiceArea;



class RegistrasiWorkerController extends Controller
{
    public function index()
    {  
        $service=RefService::get();
        $province=RefProvince::get();

        return view('user.registrasiworker',compact('service','province'));
    }

    public function store(Request $request)
    {
        $worker = new Worker;
        $worker->title = $request->title;
        $worker->description = $request->description;
        $worker->material_from = $request->materialFrom;
        $worker->budget_range_min = $request->minBudget;
        $worker->budget_range_max = $request->maxBudget;


        $worker->save();


        foreach($request->refServiceId as $rsi)
        {
            $projectServiceDemand = new WorkerService;
            $projectServiceDemand->ref_service_id = $rsi;
            $projectServiceDemand->project_id = $project->project_id;
            $projectServiceDemand->save();
        }


        return back()->with('success','posting sukses!');
    
    }

}
