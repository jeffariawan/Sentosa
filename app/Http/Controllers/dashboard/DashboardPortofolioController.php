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
            return view('user.login',compact('userId'));
        }/*else{
            return view('dashboard.portofolio.index',compact('userId'));
        }*/
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
        $userId = session('userId');
        if (is_null($userId)) {
            return view('user.login',compact('userId'));
        }
        $user = User::where('user_id', '=', $userId)
            ->first();
        $refService=RefService::get();
        return view('dashboard.portofolio.create',compact('refService','user'));
    
    }

    public function store(Request $request)
    {
        $userId = session('userId');
        if (is_null($userId))
        {
            return view('user.login',compact('userId'));
        }
        $worker = Worker::where('user_id', '=', $userId)
        ->first();
        $workerPortofolio = new WorkerPortofolio;
        $workerPortofolio->name = $request->name;
        $workerPortofolio->description = $request->description;
        $workerPortofolio->ref_service_id = $request->refServiceId;
        $workerPortofolio->worker_id = $worker->worker_id;
        $workerPortofolio->save();

        if($request->image != null){
        $img = $request->image;
        $namaFile = strval(date('mdYHis')) . $img->getClientOriginalName();
            $uploadImg = new RefPicture;
            $uploadImg->worker_portofolio_id = $workerPortofolio->worker_portofolio_id;
            $uploadImg->picture_name = $namaFile;

            $img->move(public_path().'/assets/img/portfolio', $namaFile);
            $uploadImg->save();
        }
        
            return redirect()->route('dashboard.portofolio');
    }

    public function edit($worker_portofolio_id)
    {
        $userId = session('userId');
        if (is_null($userId)) {
            return view('user.login',compact('userId'));
        }
        $user = User::where('user_id', '=', $userId)
            ->first();
        $refService=RefService::get();
        $uploadImg = RefPicture::get();
        $workerPortofolio = WorkerPortofolio::find($worker_portofolio_id);
        return view('dashboard.portofolio.edit', compact('uploadImg','workerPortofolio','refService','user'));
    }

    public function update(Request $request, $worker_portofolio_id)
    {
        $workerPortofolio=WorkerPortofolio::where('worker_portofolio_id', '=', $worker_portofolio_id)->first();
        $workerPortofolio->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'ref_service_id'=>$request->refServiceId
        ]);
        return back()->with('success','Ubah Data Suksessssss!');
    }

    public function destroy($worker_portofolio_id)
    {
        RefPicture::where('worker_portofolio_id', '=', $worker_portofolio_id)->delete();
        WorkerPortofolio::where('worker_portofolio_id', '=', $worker_portofolio_id)->delete();
        return back()->with('success', 'Hapus Data Suksess!');
    }

}