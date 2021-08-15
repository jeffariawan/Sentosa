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
    public function index($userId)
    {
        $user = User::where('user_id', '=', $userId)
            ->first();
        $refProvince = RefProvince::where('ref_province_id', '=', $user->ref_province_id)
            ->first();
        $worker = Worker::where('user_id', '=', $userId)
            ->first();
        $workerService = []; 

        if($worker == null){
            return view('worker.WorkerViewDetail', compact('user','worker','refProvince','workerService'));
        }
            
        $workerService=WorkerService::with('refService')
        ->where('worker_id', '=', $worker->worker_id)
            ->get();  

        return view('worker.WorkerViewDetail', compact('user','worker','refProvince','workerService'));
    }
}
