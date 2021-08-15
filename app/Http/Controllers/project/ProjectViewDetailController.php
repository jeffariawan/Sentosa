<?php

namespace App\Http\Controllers\project;

use App\Models\Bid;
use App\Models\User;
use App\Models\SalesH;
use App\Models\Worker;
use App\Models\Project;
use App\Models\RefProvince;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectViewDetailController extends Controller
{
    public function index($projectid)
    {   //untuk narik data dari tabel
        $project = Project::where('project_id', '=', $projectid)
            ->first();
        $user = User::where('user_id', '=', $project->user_id)
            ->first();
        $province = RefProvince::where('ref_province_id', '=', $project->ref_province_id)
            ->first();
        $bid = [];    
        $bid = Bid::with('worker.user')->where('project_id', '=', $projectid)
            ->get();
        return view('project.ProjectViewDetail', compact('project', 'user', 'province', 'bid'));
    }

    public function BidStore($userid, $projectid, Request $request)
    {
        //untuk insert ke tabel
        $worker = Worker::where('user_id', '=', $userid)
            ->first();
        if ($worker == null) {
            return "Harap daftar sebagai pekerja terlebih dahulu";
        }

        $Bid = new Bid;
        $Bid->offer_price = $request->offerprice;
        $Bid->description = $request->desc;
        $Bid->time_estimation = $request->time;
        $Bid->total_worker = $request->totalworker;
        $Bid->available_start_dt = $request->start;
        $Bid->worker_id = $worker->worker_id;
        $Bid->project_id = $projectid;
        $Bid->win_status = 0;
        $Bid->save();

        return back()->with('success', 'Berhasil menawar!');
    }

    public function setprojectwinner(Request $request)
    {
        //untuk update tabel
        $bid = Bid::where('bid_id', '=', $request->bid_id)
            ->first();
        $bid->win_status = 1;
        $bid->save();

        $project = Project::where('project_id', '=', $request->project_id)
            ->first();
        $project->status = 'progress';
        $project->final_price = $bid->offer_price;
        $project->project_start_dt = $bid->available_start_date;
        $project->save();

        $sales = new SalesH;
        $sales->total_price =  $project->final_price;
        $sales->address = $project->address;
        $sales->user_id = $project->user_id;
        $sales->project_id = $project->project_id;
        $sales->status = "Belum Lunas";
        $sales->save();

        return back()->with('success', 'Berhasil memilih pemenang!');
    }
}
