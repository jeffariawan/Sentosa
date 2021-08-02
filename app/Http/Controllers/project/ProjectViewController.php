<?php

namespace App\Http\Controllers\project;

use App\Models\Project;
use App\Models\RefService;
use App\Models\RefProvince;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProjectServiceDemand;

class ProjectViewController extends Controller
{
    public function index()
    {   //untuk narik data dari tabel
        $service=RefService::get();
        $province=RefProvince::get();

        return view('project.ProjectView',compact('service','province'));
    }

    public function projectFilterResult($id)
    {   //untuk narik data dari tabel
        $service=RefService::get();
        $province=RefProvince::get();
        $tampung =explode(",",$id);
        // $data = DB::table('project')->selectRaw('select * from project where ref_service_id  IN ('.$id.')')->get();
        // $test = json_encode($data);
        $project=ProjectServiceDemand::select ('*')
        ->whereIn('ref_service_id', $tampung)
        ->get();

        echo json_encode($project);


    }
}
