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

class WorkerViewController extends Controller
{
    public function index($refserviceid)
    {   //untuk narik data dari tabel
        $WorkerService = WorkerService::where('ref_service_id', $refserviceid)
            ->get();
        $workertampung = array();

        foreach ($WorkerService as $ws) {
            $workertampung[] = $ws->worker_id;
        }

        $worker = Worker::select('*')
            ->with('user')
            ->whereIn('worker_id', $workertampung)
            ->get();

        $service = RefService::get();
        $i = 0;

        return view('worker.workerview', compact('worker', 'service', 'i'));
    }

    public function workerFilterResult($id)
    {   //untuk narik data dari tabel
        $service = RefService::get();
        $province = RefProvince::get();
        $tampung = explode(",", $id);

        $WorkerService = WorkerService::whereIn('ref_service_id', $tampung)
            ->get();
        $workertampung = array();

        foreach ($WorkerService as $ws) {
            $workertampung[] = $ws->worker_id;
        }

        $worker = Worker::select('*')
            ->with('user')
            ->whereIn('worker_id', $workertampung)
            ->get();
        echo json_encode($worker);
    }
}
