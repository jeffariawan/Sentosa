<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use App\Models\Worker;
use App\Models\RefService;
use App\Models\RefProvince;
use Illuminate\Http\Request;
use App\Models\WorkerService;
use App\Models\WorkerServiceArea;
use App\Http\Controllers\Controller;



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
        if(session('userIdRegis') == null)
        {
            return "Session user id regis null";
        }
        
        $userIdRegis = session('userIdRegis');
        
        $user=User::where('user_id', '=', $userIdRegis)->first();
        $user = $user->load('Worker');

        if($user == null)
        {
            return "User tidak ada";
        }
        if($user->Worker == null)
        {
        $worker = new Worker;
        $worker->user_id = $userIdRegis;
        $worker->description = $request->description;
        $worker->price_range = $request->priceRange;
        $worker->worker_level_id = 1;
        $worker->save();

        foreach($request->refServiceId as $rsi)
        {
            $workerService = new WorkerService;
            $workerService->ref_service_id = $rsi;
            $workerService->worker_id = $worker->worker_id;
            $workerService->save();
        }
        foreach($request->refProvinceId as $rpi)
        {
            $workerServiceArea = new WorkerServiceArea;
            $workerServiceArea->ref_province_id = $rpi;
            $workerServiceArea->worker_id = $worker->worker_id;
            $workerServiceArea->save();
        }
        return back()->with('success','posting sukses!');
    }else{
        return "User sudah daftar Worker";
    }
    
    }

}
