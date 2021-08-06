<?php

namespace App\Http\Controllers\project;

use App\Models\User;
use App\Models\Project;
use App\Models\RefProvince;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectViewDetailController extends Controller
{
    public function index($id)
    {   //untuk narik data dari tabel
        $project=Project::where('project_id', '=', $id)
        ->first();
        $user=User::where('user_id', '=', $project->user_id)
        ->first();
        $province=RefProvince::where('ref_province_id', '=', $project->ref_province_id)
        ->first();

        return view('project.ProjectViewDetail',compact('project','user','province'));
    }
}

