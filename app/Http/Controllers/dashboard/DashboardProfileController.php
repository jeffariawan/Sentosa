<?php

namespace App\Http\Controllers\dashboard;

use App\Models\User;
use App\Models\Worker;
use App\Models\RefProvince;
use Illuminate\Http\Request;
use App\Models\WorkerService;
use App\Http\Controllers\Controller;

class DashboardProfileController extends Controller
{
    public function index()
    {
        $userId = session('userId');
        if (is_null($userId)) {
            return view('user.login',compact('userId'));
        }
        $user = User::where('user_id', '=', $userId)
            ->first();
        $refProvince = RefProvince::where('ref_province_id', '=', $user->ref_province_id)
            ->first();
        $worker = Worker::where('user_id', '=', $userId)
            ->first();
        $workerService = []; 
        if($worker == null){
            return view('dashboard.profile.profile', compact('user','worker','refProvince','workerService'));
        }
            
        $workerService=WorkerService::with('refService')
        ->where('worker_id', '=', $worker->worker_id)
            ->get();  



        return view('dashboard.profile.profile', compact('user','worker','refProvince','workerService'));
    }

    public function edit($user_id)
    {
        //untuk get province di bawah foto
        $userId = session('userId');
        if (is_null($userId)) {
            return view('user.login',compact('userId'));
        }
        $user = User::where('user_id', '=', $userId)
            ->first();
        $refProv = RefProvince::where('ref_province_id', '=', $user->ref_province_id)
            ->first();
        //untuk post edit
        $refProvince=RefProvince::get();
        $userId = session('userId');
        if (is_null($userId)) {
            return view('user.login',compact('userId'));
        }
        $user = User::where('user_id', '=', $userId)
            ->first();
        
        $user = User::find($user_id);
        return view('dashboard.profile.editprofile', compact('refProvince','user','refProv'));
    }

    public function update(Request $request, $user_id)
    {
        $user=User::where('user_id', '=', $user_id)->first();
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'age'=>$request->age,
            'ref_province_id'=>$request->refProvinceId
        ]);
        return back()->with('success','Ubah Data Suksessssss!');
    }


}
