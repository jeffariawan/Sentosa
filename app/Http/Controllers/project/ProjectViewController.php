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
        $service = RefService::get();
        $province = RefProvince::get();
        $project = Project::where('status', '=', 'open')
        ->orderBy('created_at', 'desc')
            ->get();
        $i = 0;

        return view('project.ProjectView', compact('service', 'province', 'project', 'i'));
    }

    public function projectFilterResult($id)
    {   //untuk narik data dari tabel
        $service = RefService::get();
        $province = RefProvince::get();
        $tampung = explode(",", $id);

        $projectServiceDemand = ProjectServiceDemand::select('*')
            ->whereIn('ref_service_id', $tampung)
            ->get();

        $projectReturn = array();

        foreach ($projectServiceDemand as $psd) {
            $projectReturn[] = $psd->project_id;
        }

        $project = Project::select('*')
            ->whereIn('project_id', $projectReturn)
            ->where('status', '=', 'open')
            ->orderBy('created_at', 'desc')
            ->get();


        echo json_encode($project);
    }
}
