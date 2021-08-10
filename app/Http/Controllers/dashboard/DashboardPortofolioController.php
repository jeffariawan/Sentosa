<?php

namespace App\Http\Controllers\dashboard;

use App\Models\User;
use App\Models\Worker;
use App\Models\RefService;
use Illuminate\Http\Request;
use App\Models\WorkerPortofolio;
use App\Http\Controllers\Controller;
use App\Models\RefPicture;

class DashboardPortofolioController extends Controller
{
    public function index()
    {  
        $userId = session('userId');
        if (is_null($userId)) {
            return 'login terlebih dahulu';
        }
        $user = User::where('user_id', '=', $userId)
            ->first();
        $worker = Worker::where('user_id', '=', $userId)
            ->first();
        $workerPortofolio = [];
        if ($worker != null) {
            $workerPortofolio = WorkerPortofolio::where('worker_id', '=', $worker->worker_id)
            ->with('refService')
            ->get();

        }
        return view('dashboard.portofolio.index',compact('worker','workerPortofolio','user'));
    }

    public function create()
    {
        $refService=RefService::get();
        return view('dashboard.portofolio.create',compact('refService'));
    
    }

}
